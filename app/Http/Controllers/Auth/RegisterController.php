<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/eventos';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'Last_Name'=> ['required', 'string', 'max:255'],
          'Username'=> ['required', 'string', 'max:255'],
          'Cellphone'=> ['string', 'max:255'],
          'profile_img'=>['image'],
          'intereses' => ['required']

      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     protected function create(array $data)
       {

           return User::create([
               'name' => $data['name'],
               'last_name' => $data['Last_Name'],
               'username' => $data['Username'],
               'email' => $data['email'],
               'password' => Hash::make($data['password']),
               'cellphone_number' => $data['Cellphone'],
               'profile_img'=>$data["nombre_archivo"],
               'intereses'=>$data["intereses"]

           ]);
       }

       public function register(Request $request)
       {
           $this->validator($request->all())->validate();
           $data = $request->all();
           $path=$request->file('profile_img')->store('public');
           $data["nombre_archivo"] = basename($path);
           event(new Registered($user = $this->create($data)));

           $this->guard()->login($user);

           return $this->registered($request, $user)
                           ?: redirect($this->redirectPath());
       }
}

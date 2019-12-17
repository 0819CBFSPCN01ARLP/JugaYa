function chequearVacio(variable){
  if(variable.value==""){
    return false;
  }
  else {
    return true;  //no es vacio
  }
}
/*==================================REGISTRO========================================*/
var Abecedario= /[a-zA-Z]/;
var AbecedarioMinus= /[a-z]/;
var AbecedarioMayus= /[A-Z]/;
var AlfaNumerico= /[0-9a-zA-Z]/;
var caracteresEspeciales=/[!"#$%&'()*+,-./:;<=>?@[^_`{|}~]/;
var numeros=/[0-9]/;

function validarAlfabeticosDos(cadena){
    for(let i=0; i < cadena.length; i++){
      if (!(cadena[i].match(Abecedario)) && !(cadena[i]==" ")){
        return false;
      }
    }
    //completo el for por lo que todos cumplen
    return true;
}

function chequearUser(){
  /*let name=document.getElementById('nombre').value;*/
  /*let apellido=document.getElementById('apellido').value;*/
  if(document.getElementById('name').value=="" || !validarAlfabeticosDos(document.getElementById('name').value)){
    alert("nombre o apellido no valido,use solo caracteres alfabeticos");
    return false;
  }
  else
    if (document.getElementById('Last_name').value=="" || !validarAlfabeticosDos(document.getElementById('Last_name').value)) {
      alert("nombre o apellido no valido,use solo caracteres alfabeticos");
      return false
    }
    else
      return true;
}

function validarPsw(cadena){
  var mayusculas= false;
	var minusculas= false;
	var numeroOSimbolo= false;
  for(let i=0;i < cadena.length; i++){
    if(cadena[i].match(caracteresEspeciales) || cadena[i].match(numeros)){
      numeroOSimbolo= true;
    }
    if(cadena[i].match(AbecedarioMinus)){
      minusculas= true;
    }
    if(cadena[i].match(AbecedarioMayus)){
      mayusculas= true;
    }
  }
  if (mayusculas==true && minusculas==true && numeroOSimbolo==true){
    return true;
  }
  else {
    return false;
  }
}

function pswCoinciden(clave1,clave2){
		if (clave1 == clave2){
			return true;
    }
		else{
			return false;
	  }
}

function chequearPsw(){
  let psw=document.getElementById('password').value;
  let pswConfirm=document.getElementById('password_confirm').value;

  if(psw.length<6 || !validarPsw(psw) || !pswCoinciden(psw,pswConfirm)){
    alert('Verifique la contraseña');
    return false;
  }
  else {
    return true;
  }
}
function chequearUsername(){
  let cadena=document.getElementById('Username').value;
	if (cadena != ""){
		if (cadena.length > 5){
			for(let i=0;i< cadena.length;i++){
				if (!cadena[i].match(AlfaNumerico)){
          alert("El nombre de usuario solo puede ser alfanumerico");
					return false;
				}
			}
    }
		else{
      alert("El nombre de usuario debe ser mayor a 5");
			return false;
		}
  }
	return true;
}
function validarEmail() {
  emailRegex = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
  let cadena=document.getElementById('email').value;
  if (emailRegex.test(cadena)) {
    return true;
  } else {
    alert('El email es invalido')
    return false;
  }
}
function validarCellphone(){
  let cellphone=document.getElementById('Cellphone').value;
  for(let i=0;i<cellphone.length;i++){
    if(!cellphone[i].match(numeros)){
      alert("Vuelva a ingresar el numero de telefono");
      return false;
    }
  }
  if(chequearVacio(cellphone)==true){
    return true;
  }
  else {
    return false;
  }
}
function validarIntereses(){
  let intereses=document.getElementById('intereses').value;
  for(let i=0;i<interes.length;i++){
    if(!intereses[i].match(Abecedario)){
      return false;
    }
  }
  if(chequearVacio(intereses)==true){
    return true;
  }
  else {
    return false;
  }
}

function validar(){
  if(chequearUser() && chequearPsw() && chequearUsername() && validarEmail() && validarCellphone() && validarIntereses()){
    return true;
  }
  else {
    return false;
  }
}

window.addEventListener('load',function(){


  let fomulario = document.querySelector('#formulario');
  //Con esta línea hago que el al cargar el formulario, el cursor se posicione en el campo name
  formulario.elements.userName.focus();

  formulario.onsubmit = function(evento) {
    //Aquí evito que por defecto se envie el formulario
    //Si el formulario pasa las validaciones doy el ingreso al usuario
    //Si los campos no pasan las validaciones, entonces no envio el formulario, que es la acción por defecto del submit, en el caso contrario este se envía.
    if (!validateRegisterForm()) {
      evento.preventDefault()
    }else{
      formulario.submit()
    }
  }
  //Esta es la función que valida todos los campos del formulario
  function validateRegisterForm() {
    //destructuración de código.
    let { userName, email, password, password-confirm } = formulario.elements

    if (!validateUsername(userName)) return false;
    if (!validateEmail(email)) return false;
    if (!validatePassword(password)) return false;
    if (!validatePasswordRepeat(password, repeat)) return false;

    return true;
    }
    //Aquí comoenzo a realizar cada una de las funciones encgadas de hacer las validaciones.
    function validateUsername(userName) {
      let errorUserName = document.getElementById('errorNombreUsuario');
      if (username.value.length < 6){
        errorUserName.innerHTML = "Nombre de usuario no puede tener menos de 6 digitos";
        errorUserName.classList.add('alert-danger');
        username.classList.add('is-invalid');
        return false;
      } else{
        errorUserName.innerHTML = "";
        errorUserName.classList.remove('alert-danger');
        username.classList.remove('is-invalid');
        username.classList.add('is-valid');
        formulario.elements.email.focus();
        return true;
      }



    }

    function validateEmail(email) {

      let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      let error = document.getElementById('errorEmail');
      //Aquí hago uso del método test() de javascript, encargado de validar una expresión regular, esta retorna un booleano
      if (!re.test(email.value)){
        //Aquí hago uso de las clases de bootstrap, para hacer el efceto visual de los colores por si hay un error o no.
        email.classList.add('is-invalid');
        console.log(errorEmail);
        error.innerHTML= "Debe colocar un email válido";
        error.classList.add('alert-danger');
        //errorEmail.classList.add('alert-danger');
       // email.addEventListener('change',cambioNombre);
      return false;
    }else{
      error.innerHTML= "";
      error.classList.remove('alert-danger');
      email.classList.remove('is-invalid');
      email.classList.add('is-valid');
      formulario.elements.password.focus()
      return true;
    }

    }

    function validatePassword(password) {
      let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
      let errorPassword = document.getElementById('errorPassword');

      if (!re.test(password.value)) {
        errorPassword.innerHTML = "Debe especificar una contraseña válida";
        errorPassword.classList.add('alert-danger');
        password.classList.add('is-invalid');
        return false;

      }else{
        errorPassword.innerHTML = "";
        errorPassword.classList.remove('alert-danger');
        password.classList.remove('is-invalid');
        password.classList.add('is-valid');
        formulario.elements.passwordConfirm.focus();
        //Esto se los coloque para que vean que de igual forma pueden enviar una pantalla de alert al usuario, pero usando la libreria sweetalert
        // swal('Error', 'Ingrese una contraseña válida', 'error')
        return true;
      }


    }

    function validatePasswordRepeat(password,repeat){
      console.log(password.value);
      console.log(repeat.value);
      if (password.value != repeat.value) {
        errorPasswordRepeat.innerHTML = "Las conraseñas no coinciden";
        errorPasswordRepeat .classList.add('alert-danger');
        repeat.classList.add('is-invalid');
        return false;

      }else{
        errorPasswordRepeat .innerHTML = "";
        errorPasswordRepeat.classList.remove('alert-danger');
        repeat.classList.remove('is-invalid');
        repeat.classList.add('is-valid');


        return true;
      }


    }


});

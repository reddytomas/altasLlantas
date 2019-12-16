window.onload=function(){
  //  capturo el formulario
  let register= document.querySelector('#formulario')
  //hago foco en el primeer elemento del formulario "name"
  register.elements.name.focus();
  console.log(register.elements.name.value);
  register.onsubmit = function(evento) {

      if (!validateRegister()) {
        evento.preventDefault()
      }else{
        register.submit()
      }
    }
    function validateRegister() {
      let {name, email, password,password_confirmation, municipio, provincia} = register.elements
      if (!validateName(name)) return false;
      if (!validateEmail(email)) return false;
      if (!validatePassword(password)) return false;
      if (!validatePasswordRepeat(password, password_confirmation)) return false;
      if (!validateMunicipio(municipio)) return false;
      if (!validateProvincia(provincia)) return false;

      return true;
      }
      function validateName(name) {
          console.log("Hola");
          let errorName = document.getElementById('errorName');
          if (name.value.length < 1){
            errorName.innerHTML = "debe ingresar un Username";
            errorName.classList.add('alert-danger');
            name.classList.add('is-invalid');
            return false;
          } else{
            errorName.innerHTML = "";
            errorName.classList.remove('alert-danger');
            name.classList.remove('is-invalid');
            name.classList.add('is-valid');
            register.elements.email.focus();
            return true;
          }
  }
  function validateEmail(email) {
      let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
      let error = document.getElementById('errorEmail');
      if (!re.test(email.value)){
        email.classList.add('is-invalid');
        console.log(error);
        error.innerHTML= "coloque un email valido";
        error.classList.add('alert-danger');

      return false
    }else{
      error.innerHTML= "";
      error.classList.remove('alert-danger');
      email.classList.remove('is-invalid');
      email.classList.add('is-valid');
      register.elements.password.focus()
      return true;
    }
  }
  function validateProvincia(provincia){
    let errorProvincia = dociment.getElementById('errorProvincia');
    if (provincia.value == "") {
      provincia.classList.add('is-invalid');
      errorProvincia.innerHTML = "seleccione la provincia";
      errorProvincia.classList.add('text-danger');
      return false;
    }else {
      provincia.classList.add('is-valid');
      provincia.classList.remove('is-invalid');
      errorProvincia.innerHTML = "";
      errorProvincia.classList.remove('text-danger');
      return true;
    }
  }

  function validateMunicipio(municipio){
    let errorMunicipio = dociment.getElementById('errorMunicipio');
    if (municipio.value == "") {
      municipio.classList.add('is-invalid');
      errorMunicipio.innerHTML = "seleccione la provincia";
      errorMunicipio.classList.add('text-danger');
      return false;
    }else {
      provincia.classList.add('is-valid');
      provincia.classList.remove('is-invalid');
      errorProvincia.innerHTML = "";
      errorProvincia.classList.remove('text-danger');
      return true;
    }
  }

  // capturar elementos provincia y municipio.

  let provinciaSeleccionada = document.querySelector('#provincia');
  let municipioSeleccionado = document.querySelector('#municipio');
  // llamo a la funciones
  armarProvincias();

  // ejecuto la funcion, los datos siempre van a venir en json cunado voy contra una api, pero en nuestro form viajan en modo text
  function armarProvincias(){
    fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre')
    .then(function(respuesta){
      return respuesta.json()
    })
    .then(function(datosProvincia){
      console.log(datosProvincia)
      provinciaSeleccionada.innerHTML = "<option value='' name='opprovincia'>seleccion provincia </div>"
      for (let seleccionProvincia of datosProvincia.provincias) {
        let opcionProvincia = document.createElement('option')
        opcionProvincia.setAttribute('value', seleccionProvincia.id)
        opcionProvincia.innerHTML = seleccionProvincia.nombre
        provinciaSeleccionada.append(opcionProvincia)
      }
    })
  }
  provinciaSeleccionada.addEventListener('change', function(){
    seleccion = provinciaSeleccionada.value;
    armarMunicipios(seleccion);
  })

  function armarMunicipios(){
    fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=22&campos=id,nombre&max=100')
    .then(function(respuesta){
      return respuesta.json()
    })
    .then(function(datosMunicipio){
      console.log(datosMunicipio)
      municipioSeleccionado.innerHTML = "<option value='' >seleccion municipio </div>"
      for (let seleccionMunicipio of datosMunicipio.municipios) {
        let opcionMunicipio = document.createElement('option')
        opcionMunicipio.setAttribute('value', seleccionMunicipio.id)
        opcionMunicipio.innerHTML = seleccionMunicipio.nombre
        municipioSeleccionado.append(opcionMunicipio)
      }
    })
  }


  function validatePassword(password) {
        //En la contraseña como minimo se requiero ocho caracteres, usando mayusculas y minusculas, si desean usar 6 caracteres  deben entonces cambiar el 8    (   d]{8,}$/  ) por un 6
        let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/
        let errorPass = document.getElementById('errorPassword');
        if (!re.test(password.value)) {
          errorPass.innerHTML = "la contraseña debe tener como minimo 8 caracteres y debe tener por lo menos una mayuscula";
          errorPass.classList.add('alert-danger');
          password.classList.add('is-invalid');
          return false;
        }else{
          errorPass.innerHTML = "";
          errorPass.classList.remove('alert-danger');
          password.classList.remove('is-invalid');
          password.classList.add('is-valid');
          register.elements.password_confirmation.focus();
          // swal('Error', 'Ingrese una contraseña válida', 'error')
          return true;
        }
      }
      function validatePasswordRepeat(password,password_confirmation){
        console.log(password.value);
        console.log(password_confirmation.value);
        errorPass2 = document.getElementById('errorPasswordConfirmation');
        if (password.value != password_confirmation.value) {
          errorPass2.innerHTML = "las contraseñas deben ser iguales";
          errorPass2.classList.add('alert-danger');
          password_confirmation.classList.add('is-invalid');
          return false;
        }else{
          errorPass2.innerHTML = "";
          errorPass2.classList.remove('alert-danger');
          password_confirmation.classList.remove('is-invalid');
          password_confirmation.classList.add('is-valid');
          register.elements.button.focus();
          return true;
        }
      }

      //Aquí incorporo lo referido a la incorporación de la visualización del código del password, lo realice usando jquery
      //Ojo no se les olvide incorporar el llamado a <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>   y eso lo colocan en su app.blade.php antes del cierre del </body>
      let password1 = $('#password')
      $('#ojoPassword').click(function () {
          if(password1.attr('type')=='password'){
              $('#ojoPassword').attr('name','eye')
              password1.attr('type','text')
          }else{
               $('#ojoPassword').attr('name','eye-off')
               password1.attr('type','password')
          }
      });


  } // Fin de la función onload

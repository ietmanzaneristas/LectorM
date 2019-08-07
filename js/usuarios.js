$(function () {

  // mostrar div con el error 
  // $('#nombre_usu ~ span').css('visibility', 'visible');

  $('#email_usu').focusout(function () {
    // console.log('Esta cambiando');
    $.post('ajaxValidateEmail_usu.php', {
        email_usu: $(this).val(),
        beforeSend: function () {
          $('#email_usuValida').html('Validando el e-mail <div class="mdl-spinner mdl-js-spinner is-active"></div>');
        }
      },

      function (respuesta) {
        $('#email_usuValida').html(respuesta);
        if (respuesta.length > 0) {
          $('#email_usu').focus();
        }
      });

  });

  $("#miForm1").validate({
    rules: {
      nombre_usu: "required",
      apellido_usu: "required",
      fechaNac_usu: "required",
      email_usu: "required",
      sede_usu: "required",
      curso_usu: "required",
      foto_usu: "required",
      pass_usu: {
        required: true,
        minlength: 8,
        equalTo: "#pass_usu2"
      },
      pass_usu2: {
        required: true,
        minlength: 8,
        equalTo: "#pass_usu"
      }
    },
    messages: {
      nombre_usu: {
        required: "Debe ingresar un nombre",
        pattern: "Formato inválido"
      },
      apellido_usu: {
        required: "Debe ingresar un apellido",
        pattern: "Formato inválido"
      },
      pass_usu: {
        required: "Debe ingresar una contraseña",
        minlength: "Debe tener un minimo de 8 caracteres",
        equalTo: "Las contraseñas no coinciden"
      },
      foto_usu: {
        required: "Debe tomar una foto o subir una imagen",
        accept: "Debe tomar una foto o subir una imagen"
      },
      pass_usu2: {
        required: "Debe ingresar una contraseña",
        minlength: "Debe tener un minimo de 8 caracteres",
        equalTo: "Las contraseñas no coinciden"
      }
    }
  });



});
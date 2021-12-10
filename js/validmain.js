$(document).ready(function () {

    $("#dataValidation").validate({

        rules: {
          
          email: {
            required: true,
            email: true
          },
          
          password: {
            required: true,
            minlength: 8
          },
        },
        messages: {
          email: {
            required: "Introduce-ți email-ul",
            email: "Introduce-ți un email valid"
          },
          password: {
            required: "Introduce-ți parola",
            minlength: "Parola trebuie să conțină cel puțin 8 caractere"
          },
        },

        submitHandler: function(form) {
          var email = $('#email').val();
          var password = $('#password').val();
          $.ajax({
            type: 'POST',
            url: 'php/loginphp.php',
            dataType: 'json',
            data: {
              email : email,
              password : password,
            },
            success: function(resp){
              if (resp.statusCode == 200) {
                alert("LOGARE CU SUCCES");
                window.location.href = "ion_creanga.html";
              }
              else if (resp.statusCode == 201) {
                alert("EROARE DE LOGARE");
              }
            }
          })
          // form.submit();
        }
    });
});
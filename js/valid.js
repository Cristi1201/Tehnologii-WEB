$(document).ready(function () {

    $("#formValidation").validate({

        rules: {
          name: {
            required: true
          },
          surname: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          age: {
            required: true
          },
          password: {
            required: true,
            minlength: 8
          },
          password2: {
            minlength: 8,
            equalTo: "#password"
          },
        },
        messages: {
          name: {
            required: "Introduce-ți numele"
          },
          surname: {
            required: "Introduce-ți prenumele"
          },
          email: {
            required: "Introduce-ți email-ul",
            email: "Introduce-ți un email valid"
          },
          gender: {
            required: "Alegeți genul"
          },
          password: {
            required: "Introduce-ți parola",
            minlength: "Parola trebuie să conțină cel puțin 8 caractere"
          },
          password2: {
           equalTo: "Parolele trebuie să fie identice"
          },
        },

        submitHandler: function(form) {
          var name = $('#name').val();
          var surname = $('#surname').val();
          var email = $('#email').val();
          var gender = $('.gender').val();
          var age = $('#age').val();
          var password = $('#password').val();
          var password2 = $('#password2').val();
          $.ajax({
            type: 'POST',
            url: 'php/singupphp.php',
            dataType: 'json',
            data: {
              name : name,
              surname : surname,
              email : email,
              gender : gender,
              age : age,
              password : password,
              password2 : password2,
            },
            success: function(resp){

              if (resp.statusCode == 200) {
                alert("INREGISTRARE CU SUCCES");
                window.location.href = "login.html";
              }
              else if(resp.statusCode == 201) {
                alert("VERIFICATI DATELE");
              }
              else if(resp.statusCode == 202) {
                alert("EROARE DE INREGISTRARE");
              }
            }
          })
        }
    });
});
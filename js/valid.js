
$(document).ready(function () {

    //### CONTACT FORM VALIDATE ###
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
          }
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
          }

        },

        submitHandler: function(form) {
          form.submit();
        }
    });
   
});











// $(document).ready(function() {  
         // $("#mysbutton").click(function() {  
             
         // });
//        }); 









// $(document).ready(function () {

//     //### CONTACT FORM VALIDATE ###
//     $("#form").validate({
//         rules: {
//           nume: {
//             required: true
//           },
//           prenume: {
//             required: true
//           }
//           email: {
//             required: true,
//             email: true
//           }
//         },
//         messages: {
//           nume: {
//             required: "Introduce-ți numele",
//           },
//           prenume: {
//             required: "Introduce-ți prenumele",
//           },
//           email: {
//             required: "Trebu email",
//             email: "Introdu corect !!"
//           }
//         },
//         submitHandler: function(form) {
//           form.submit();
//         }
//     });
// });














// <script src="jquery.js" type="text/javascript">

    // $(function() {
    //  $("#singup").click(function() {
    //  var email = $(#email).val();
    //  var password = $(#password).val();

    //  if (email.indexOf("@") < 0 || email.indexOf(".") < 0) {
    //      alert("Email greșit");
    //      return;
    //  }

    //  if (password.length < 8) {
    //      alert("Parola trebuie să conțină minim 9 caractere")
    //      return;
    //  }
    //  document.write("Datele s-au înregistrat cu succes !")
    //  });
    // });


    // $(document).ready(function() {
    //  $('#form').submit(function(e) {
    //      e.preventDefault();
            
    //      var pswd = $('#password').val();

    //      $(".error").remove(); 

    //      if (password.length < 8) {
    //              $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
 //         }
    //  });
    // });

//     $(document).ready(function () {
//         $('#form').validate({
//             rules: {
//                 password: {
//                     required: true,
//                     minlength: 8
//                 }
//             },
//             sumbitHandler: function(form) {
//                 alert('valid form submitted');
//                 return false;
//             }
//         });
//     });


// </script>



// $(document).ready(function () {

//     //### CONTACT FORM VALIDATE ###
//     $("#dataValidation").validate({

//         rules: {
//           email: {
//             required: true,
//             email: true
//           },
//           password: {
//             required: true,
//             minlength: 8
//           }
//         },
//         messages: {
//           email: {
//             required: "Introduce-ți email-ul",
//             email: "Introduce-ți un email valid"
//           },
//           password: {
//             required: "Introduce-ți parola",
//             minlength: "Parola trebuie să conțină cel puțin 8 caractere"
//           }
//         },

//         submitHandler: function(form) {
//           form.submit();
//         },
//     });
//   });




$(document).ready(function () {

    //### CONTACT FORM VALIDATE ###
    $("#formValidation").validate({

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
          form.submit();
        }
    });
   
});
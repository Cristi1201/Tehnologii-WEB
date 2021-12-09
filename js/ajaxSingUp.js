$("#submitF").click(function(e){
  e.preventDefault();
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
      // var rs = JSON.parse(resp);

      if (resp.statusCode == 200) {
        alert("");
      }
      else if(resp.statusCode == 201) {
        alert("EROARE");
      }
    }
  })
});
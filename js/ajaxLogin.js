$("#submitF").click(function(e){
  e.preventDefault();
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
      console.log("eeeeeeeeeeeeeeee");
      if (resp.statusCode == 200) {
        alert("ok");
      }
      else if(resp.statusCode == 201) {
        alert("EROARE1");
      }
      else if(resp.statusCode == 202) {
        alert("EROARE2");
      }
      else if(resp.statusCode == 203) {
        alert("EROARE3");
      }
      else if(resp.statusCode == 204) {
        alert("EROARE4");
      }
      else if(resp.statusCode == 205) {
        alert("EROARE5");
      }
    }
  })
});
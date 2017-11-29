$(document).ready(function() {
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
   $('#pesan').html('Kata Sandi Baru Cocok').css('color', 'green'); 
   //$("#phone").removeAttr("disabled"); 
  } 
 else {
   $('#pesan').html('Kata Sandi Baru Tidak Cocok').css('color', 'red'); 
   //$("#phone").attr("disabled", "disabled"); 
  }
 });
});
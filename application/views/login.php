<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Barbershop Cpanel</title>
	<script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap-notify.min.js"></script>
	<style type="text/css">
	
	/****** LOGIN MODAL ******/
	html { 
		background: url(<?php echo base_url(); ?>assets/img/backgrounds/1.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.modal-dialog {
		margin-top: 100px;
	}
	.loginmodal-container {
	  padding: 25px;
	  max-width: 350px;
	  width: 100% !important;
	  background-color: #F7F7F7;
	  margin: 0 auto;
	  border-radius: 2px;
	  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	  overflow: hidden;
	  font-family: Helvetica, sans-serif;
	  opacity:0.95;
	}
	
	.loginmodal-container h1 {
	  text-align: center;
	  font-size: 1.8em;
	  font-family: Helvetica, sans-serif;
	}
	
	.loginmodal-container input[type=submit] {
	  width: 100%;
	  display: block;
	  margin-bottom: 10px;
	  position: relative;
	}
	
	.loginmodal-container input[type=text], input[type=password] {
	  height: 44px;
	  font-size: 16px;
	  width: 100%;
	  margin-bottom: 10px;
	  -webkit-appearance: none;
	  background: #fff;
	  border: 1px solid #d9d9d9;
	  border-top: 1px solid #c0c0c0;
	  /* border-radius: 2px; */
	  padding: 0 8px;
	  box-sizing: border-box;
	  -moz-box-sizing: border-box;
	}
	
	.loginmodal-container input[type=text]:hover, input[type=password]:hover {
	  border: 1px solid #b9b9b9;
	  border-top: 1px solid #a0a0a0;
	  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	}
	
	.loginmodal {
	  text-align: center;
	  font-size: 14px;
	  font-family: 'Arial', sans-serif;
	  font-weight: 700;
	  height: 36px;
	  padding: 0 8px;
	/* border-radius: 3px; */
	/* -webkit-user-select: none;
	  user-select: none; */
	}
	
	.loginmodal-submit {
	  /* border: 1px solid #3079ed; */
	  border: 0px;
	  color: #fff;
	  text-shadow: 0 1px rgba(0,0,0,0.1); 
	  background-color: #4d90fe;
	  padding: 17px 0px;
	  font-family: Helvetica, sans-serif;
	  font-size: 16px;
	  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
	}
	
	.loginmodal-submit:hover {
	  /* border: 1px solid #2f5bb7; */
	  border: 0px;
	  text-shadow: 0 1px rgba(0,0,0,0.3);
	  background-color: #357ae8;
	  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
	}
	
	.loginmodal-container a {
	  text-decoration: none;
	  color: #666;
	  font-weight: 400;
	  text-align: center;
	  display: inline-block;
	  opacity: 0.6;
	  transition: opacity ease 0.5s;
	} 
	.alert {
		  padding: 15px;
		  margin-bottom: 20px;
		  border: 1px solid transparent;
		  border-radius: 4px;
	}
	.alert h4 {
	  margin-top: 0;
	  color: inherit;
	}
	.alert .alert-link {
	  font-weight: bold;
	}
	.alert > p,
	.alert > ul {
	  margin-bottom: 0;
	}
	.alert > p + p {
	  margin-top: 5px;
	}
	.alert-dismissable,
	.alert-dismissible {
	  padding-right: 35px;
	}
	.alert-dismissable .close,
	.alert-dismissible .close {
	  position: relative;
	  top: -2px;
	  right: -21px;
	  color: inherit;
	}
	.alert-success {
	  color: #3c763d;
	  background-color: #dff0d8;
	  border-color: #d6e9c6;
	}
	.alert-success hr {
	  border-top-color: #c9e2b3;
	}
	.alert-success .alert-link {
	  color: #2b542c;
	}
	.alert-info {
	  color: #31708f;
	  background-color: #d9edf7;
	  border-color: #bce8f1;
	}
	.alert-info hr {
	  border-top-color: #a6e1ec;
	}
	.alert-info .alert-link {
	  color: #245269;
	}
	.alert-warning {
	  color: #8a6d3b;
	  background-color: #fcf8e3;
	  border-color: #faebcc;
	}
	.alert-warning hr {
	  border-top-color: #f7e1b5;
	}
	.alert-warning .alert-link {
	  color: #66512c;
	}
	.alert-danger {
	  color: #a94442;
	  background-color: #f2dede;
	  border-color: #ebccd1;
	}
	.alert-danger hr {
	  border-top-color: #e4b9c0;
	}
	.alert-danger .alert-link {
	  color: #843534;
	}
	.close {
	  float: right;
	  font-size: 21px;
	  font-weight: bold;
	  line-height: 1;
	  color: #000;
	  text-shadow: 0 1px 0 #fff;
	  filter: alpha(opacity=20);
	  opacity: .2;
	}
	.close:hover,
	.close:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	  filter: alpha(opacity=50);
	  opacity: .5;
	}
	button.close {
	  -webkit-appearance: none;
	  padding: 0;
	  cursor: pointer;
	  background: transparent;
	  border: 0;
	}
	</style>
</head>
<body>
<div class="modal-dialog">
    <div class="loginmodal-container">
        <h2 align="center">Barbershop Cpanel</h2><br>
      	<?php echo form_open('administrator/otentikasi'); ?>
        <input type="text" name="username" placeholder="Nama Pengguna" required>
        <input type="password" name="password" placeholder="Kata Sandi" required>
        <input type="submit" name="login" class="login loginmodal-submit" value="Masuk">
      	<?php 
			echo form_close();
		?>
    </div>
</div>
<script type="text/javascript">
//$("document").ready(function(){
//	$.notify('<?php $error; ?>', {
//		allow_dismiss: true,
//		placement: {
//			from: 'top',
//			align: 'right'
//		}
//	});
//	$.notify('I will not close until my delay is up.', {
//		allow_dismiss: true,
//		placement: {
//			from: 'top',
//			align: 'right'
//		}
//	});
	//setTimeout(function() {
	//	$.notifyClose('top-right');
	//});
//});
</script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Barbershop</title>

	<!-- SCRIPT -->
	<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/jQueryUI/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/moment/moment-with-locales.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- STYLESHEET -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Barbershop</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Temukan kami di
							</span>
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong>Barbershop</strong> Reservasi sekarang !</h1>
                            <div class="description">
                            	<p>
	                            	Barbershop melayani Anda dengan profesional. Buka dari pukul 9:00 sampai 17:00 !
                            	</p>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Booking Sekarang !</h3>
                            		<p>Kami siap melayani Anda</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
									<?php
									echo form_open('welcome/saved', array(
										'class' => 'registration-form'
									));
									?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-name">Nama Lengkap</label>
			                        	<input type="text" name="form-name" placeholder="Nama Lengkap Anda..." class="form-name form-control" id="form-name" maxlength="50" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-date">Tanggal</label>
			                        	<input type="text" name="form-date" placeholder="Pilih Tanggal..." class="form-time form-control" id="form-date" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-time">Waktu</label>
			                        	<select name="form-time" id="form-time" class="form-time form-control" required>
											
										</select>
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-cat">Kategori</label>
			                        	<select name="form-cat" id="form-cat" class="form-cat form-control" required>
											<option value="">Pilih Kategori ...</option>
											<option value="1">Anak-anak</option>
											<option value="2">Dewasa</option>
										</select>
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-type">Jenis Pangkas</label>
			                        	<select name="form-type" id="form-type" class="form-type form-control" required>
											
										</select>
			                        </div>
									<div class="form-group">
										<div id="price" class="alert alert-success" ></div>
										<input type="hidden" name="form-verify" value="<?php echo rand(000,999); ?>">  
									</div>
			                        <button type="submit" class="btn">Booking ...</button>
			                    <?php echo form_close(); ?>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        <script>
		$(document).ready(function(){
			$("#form-date").change(function () {
				$.post('jquery/select_time',
				{a:$("#form-date").val()},
				function(html){
					$("#form-time").html(html);
				});
			});
			$("#form-cat").change(function () {
				$.post('jquery/jenis_pangkas',
				{b:$('select[name=form-cat]').val()},
				function(html){
					$("#form-type").html(html);
				});
			});
			$("#form-type").change(function () {
				$.post('jquery/harga',
				{c:$('select[name=form-type]').val()},
				function(html){
					$("#price").html(html);
				});
			});
			$('#form-date').datepicker({
				format: 'yyyy-mm-dd',
				startDate: '1d'
			});
		});
		</script>
        <!--[if lt IE 10]>
            <script src="<?php echo base_url(); ?>assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>
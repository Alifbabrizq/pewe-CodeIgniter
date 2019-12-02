
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">
</head>

<body>

	<div class="wrapper">
		<div style="" class="inner">
			<div class="image-holder">
			</div>
			<img style="margin-left:-200px; height:400px;" src="<?php echo base_url();?>assets/register/images/map1.png"
				alt="">

			<form style="margin-left:90px;" action="<?php echo base_url('index.php/Login/login'); ?>" method="post">

				<h2
					style="font-family: Roboto; font-style: normal; font-weight: 300; font-size: 40px; line-height: 70px; color: #6E0EBA;margin-top:-50px;margin-bottom:10px">
					Welcome to</h2>
				<h2
					style="font-family: Rubik; font-style: normal; font-weight: bold; font-size: 50px; line-height: 107px; color: #6E0EBA; text-shadow: 3px 4px 6px rgba(0, 0, 0, 0.25);margin-top:-47px;">
					ART-KHEIN</h2>
					<?php
								$notif = $this->session->flashdata('notif');
								if($notif != NULL){
									echo '
										<div class="alert alert-danger">'.$notif.'</div>
									';
								}
							?>

				<div class="form-row">
					<input type="text" class="form-control" placeholder="Username" name="username">
				</div>
				<div class="form-row">
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<input class="button" style="margin-left:-0px" type="submit" name="Login" value="LOGIN">
				<p style="margin-top:20px;">Don't have an Account?<a
						href="<?php echo base_url();?>index.php/Welcome/create_account">Register</a></p>

			</form>

		</div>
	</div>

	<script src="<?php echo base_url();?>assets/register/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

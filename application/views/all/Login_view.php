<!-- <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url();?>assetss/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<?php
								$notif = $this->session->flashdata('notif');
								if($notif != NULL){
									echo '
										<div class="alert alert-danger">'.$notif.'</div>
									';
								}
							?>
							<form class="login100-form validate-form" action="<?php echo base_url('index.php/Login/login'); ?>" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="<?php echo base_url();?>assetss/#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="Login" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div> -->




	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div style="" class="inner">
				<div class="image-holder">
				</div>
				<img style="margin-left:-200px; height:400px;" src="<?php echo base_url();?>assets/register/images/map1.png" alt="">

				<form style="margin-left:90px;" action="<?php echo base_url('index.php/Login/login'); ?>" method="post">
					<h2 style="font-family: Roboto; font-style: normal; font-weight: 300; font-size: 40px; line-height: 70px; color: #6E0EBA;margin-top:-50px;margin-bottom:10px">Welcome to</h2>
                    <h2 style="font-family: Rubik; font-style: normal; font-weight: bold; font-size: 50px; line-height: 107px; color: #6E0EBA; text-shadow: 3px 4px 6px rgba(0, 0, 0, 0.25);margin-top:-47px;">ART-KHEIN</h2>
                    
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-row">
						<input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
					<input class="button" style="margin-left:-0px" type="submit" name="Login" value="LOGIN">
					<p style="margin-top:20px;">Don't have an Account?<a href="<?php echo base_url();?>index.php/Welcome/create_account">Register</a></p>
					
				</form>
				
			</div>
		</div>

		<script src="<?php echo base_url();?>assets/register/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url();?>assets/register/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm_v6 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">
</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<div class="image-holder">
				<img style="width:285px; height:520px;" src="<?php echo base_url();?>assets/register/images/art1.png"
					alt="">
			</div>
			<?php
                      $notif = $this->session->flashdata('notif');
                      if($notif != NULL){
                        echo '
                          <div class="alert alert-danger">'.$notif.'</div>
                        ';
                      }
                    ?>
			<form action="<?php echo base_url();?>index.php/Login/create_worker" method="post"
				enctype="multipart/form-data">
				<h2
					style="font-family: Rubik; font-style: normal; font-weight: bold; font-size: 50px; line-height: 107px; color: #6E0EBA; text-shadow: 3px 4px 6px rgba(0, 0, 0, 0.25);margin-top:-72px;">
					CREATE</h2>
				<h2
					style="font-family: Roboto; font-style: normal; font-weight: 300; font-size: 30px; line-height: 70px; color: #6E0EBA; margin-top:-82px; margin-left:40%;">
					ART-KHEIN Account</h2>
				<input style="width:100%; margin-bottom:20px;" type="text" class="form-control" name="nama_worker" placeholder="Nama">
				<div class="form-row">
					<input type="text" class="form-control" name="username" placeholder="Username">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-row">
					<input type="email" class="form-control" name="email" placeholder="Email">
					<input type="number" class="form-control" name="no_tlp" placeholder="Phone">
					<!-- <div class="form-holder">
							<select name="" id="" class="form-control">
								<option value="" disabled selected>Choose Your Class</option>
								<option value="class 01">Class 01</option>
								<option value="class 02">Class 02</option>
								<option value="class 03">Class 03</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div> -->
				</div>
				<input style="width:100%; margin-bottom:20px;" type="number" name="no_rek" class="form-control"
					placeholder="No rekening">
				<input style="margin-bottom:20px;" type="file" name="portofolio" class="form-control" placeholder="Portofolio">
				<textarea name="alamat_worker" placeholder="Alamat" class="form-control" style="height: 100px;"></textarea>
				<!-- <button style="width:100%;">SIGN UP AS ARCHITECT
						<i class="zmdi zmdi-long-arrow-right"></i>
                    </button> -->
				<input class="button" style="width:100%;" type="submit" name="Login" value="SIGN UP AS ARCHITECT">
			</form>

		</div>
	</div>

	<script src="<?php echo base_url();?>assets/register/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

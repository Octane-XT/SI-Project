<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Register</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url('assets/images/logo.jpg'); ?>" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="<?php echo base_url('assets/css/app-style.css'); ?>" rel="stylesheet" />
	<style>
		input[type="date"]::-webkit-inner-spin-button,
		input[type="date"]::-webkit-calendar-picker-indicator {
			display: none;
			-webkit-appearance: none;
		}
	</style>
</head>

<body>



	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="card card-authentication1 mx-auto my-4">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="assets/images/logo.jpg" alt="logo icon" style="width:30px; heigth:30px">
					</div>
					<div class="card-title text-uppercase text-center py-3">Sign Up</div>
					<form method="POST" action="<?php echo base_url("Register/add"); ?>">
						<div class="form-group">
							<label for="exampleInputName" class="sr-only">First Name</label>
							<div class="position-relative has-icon-right">
								<input type="text" name="nom" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your First Name">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputName" class="sr-only">Last Name</label>
							<div class="position-relative has-icon-right">
								<input type="text" name="prenom" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Last Name">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputName" class="sr-only">Date of Birth</label>
							<div class="position-relative has-icon-right">
								<input type="date" name="date_naissance" id="exampleInputName" class="form-control input-shadow">
								<div class="form-control-position">
									<i class="zmdi zmdi-calendar-check"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputEmailId" class="sr-only">Email</label>
							<div class="position-relative has-icon-right">
								<input type="email" name="email" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email">
								<div class="form-control-position">
									<i class="icon-envelope-open"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword" class="sr-only">Password</label>
							<div class="position-relative has-icon-right">
								<input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Your Password">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="icheck-material-white">
								<input type="checkbox" id="user-checkbox" checked="" />
								<label for="user-checkbox">I Agree With Terms & Conditions</label>
							</div>
						</div>

						<button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
						<div class="text-center mt-3">Sign Up With</div>

						<div class="form-row mt-4">
							<div class="form-group mb-0 col-6">
								<button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
							</div>
							<div class="form-group mb-0 col-6 text-right">
								<button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
							</div>
						</div>

					</form>
				</div>
			</div>
			<div class="card-footer text-center py-3">
				<p class="text-warning mb-0">Already have an account? <a href="<?php echo base_url("Login"); ?>"> Sign In here</a></p>
			</div>
		</div>




	</div><!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

	<!-- sidebar-menu js -->
	<script src="<?php echo base_url('assets/js/sidebar-menu.js'); ?>"></script>

	<!-- Custom scripts -->
	<script src="<?php echo base_url('assets/js/app-script.js'); ?>"></script>


</body>

</html>
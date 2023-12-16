<?php
	$page_title = "MedLanez";
	include_once('includes/header.php');
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="assets/img/em1.jpg" alt="First slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>EVENT MANAGEMENT</h1>
							<p>Welcome to the our Event Management Service!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.carousel -->

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>CREATE ACCOUNT</h2>
				<p>Sign up for an account in order to check your guest list and order status along with vendor details.</p>
				<p><a class="btn btn-default" href="user_registration.php" role="button">SIGN UP &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LOG IN</h2>
				<p>If you already have an account, then you can log in to update guest list and make payments.!</p>
				<p><a class="btn btn-default" href="user_loginform.php" role="button">USER LOGIN &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>VENDOR LOGIN</h2>
				<p>If you are a Vendor, LogIn to add Items and check already existing ones!</p>
				<p><a class="btn btn-default" href="vendor_loginform.php" role="button">VENDOR LOGIN &raquo;</a></p>
			</div>
		</div>

	</div>


<?php
	include_once('includes/footer.php');
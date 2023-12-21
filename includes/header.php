<?php
//start session
@session_start();
$page_title = "Axciom-event-management";

//check to see if a user if logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
	$login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
	$role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
	$session_id = $_SESSION['id'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class=" navbar-brand"><i class="fa fa-clock-o fa-lg"></i> Acxiom</a>
		</div>
		<div class="navbar-right">
			<div id="navbar" class="navbar-collapse collapse">
			<?php
				if ($role == 1) : ?>
					<ul class="nav navbar-nav">
						<li><a href="adminaccount.php" class="text-capitalize">Welcome, <?php print_r($name); ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="admin.php">PRODUCTS</a></li>
								<li><a href="adminaccount.php">ACCOUNT</a></li>
								<li><a href="contactus.php">CONTACT US</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if ($role == 2) : ?>
					<ul class="nav navbar-nav">
						<li><a href="useraccount.php" class="text-capitalize">Welcome, <?php print_r($name); ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="user.php">PRODUCTS</a></li>
								<li><a href="useraccount.php">ACCOUNT</a></li>
								<li><a href="contactus.php">CONTACT US</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if ($role == 3) : ?>
					<ul class="nav navbar-nav">
						<li><a href="vendoraccount.php" class="text-capitalize">Welcome, <?php print_r($name); ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="vendor.php">PRODUCTS</a></li>
								<li><a href="vendoraccount.php">ACCOUNT</a></li>
								<li><a href="contactus.php">CONTACT US</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if (empty($login)) : ?>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> LogIn Account <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="user_loginform.php">USER LOGIN</a></li>
								<li><a href="vendor_loginform.php">VENDOR LOGIN</a></li>
								<li><a href="admin_loginform.php">ADMIN LOGIN</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Register Account <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="user_registration.php">USER REGISTER</a></li>
								<li><a href="vendor_registration.php">VENDOR REGISTER</a></li>
								<li><a href="admin_registration.php">ADMIN REGISTER</a></li>
							</ul>
						</li>
					</ul>
				<?php endif; ?>

			</div>
		</div><!--/.navbar-right -->
	</div>
</nav>
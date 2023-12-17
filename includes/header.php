<?php
//start session
@session_start();

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
$count=0;
if(isset($_SESSION['cart']))
{
	$count=count($_SESSION['cart']);
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
						<li><a href="addtoaccount.php" class="text-capitalize">Welcome, <?php echo $name; ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="adminpanel.php">ADMIN PANEL</a></li>
								<li><a href="mycart.php">MY CART [<?php echo $count; ?>]</a></li>
								<li><a href="useraccount.php">ACCOUNT</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if ($role == 2) : ?>
					<ul class="nav navbar-nav">
						<li><a href="addtoaccount.php" class="text-capitalize">Welcome, <?php print_r($name); ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="mycart.php">MY CART [<?php echo $count; ?>]</a></li>
								<li><a href="useraccount.php">ACCOUNT</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if (empty($login)) : ?>
					<form class="navbar-form navbar-right" role="form" action="login.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Username" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-success">SIGN IN</button>
					</form>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="user_registration.php">USER REGISTER</a></li>
							</ul>
						</li>
					</ul>
				<?php endif; ?>

			</div>
		</div><!--/.navbar-right -->
	</div>
</nav>
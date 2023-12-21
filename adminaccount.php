<?php
$page_title = "Dashboard";
require_once ('includes/header.php');
require_once ('includes/database.php');


//retrieve admin id
$admin_id = $session_id;

//define the select statement
$query_str = "SELECT * FROM admins WHERE admin_id=" . $admin_id;
// $review_str = "select review_content, review_id, review_rating, product_name, product_id from reviews join product on reviews.review_product_id=product.product_id where reviews.review_admin_id=" . $admin_id;

//execute the query
$result = $conn->query($query_str);
// $review_result = $conn->query($review_str);



//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { //display results in a table
	?>
	<div class="container wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Dashboard</li>
		</ul>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<h1 class="text-center text-success">Hi <?php echo $name; ?>!</h1>
				<p class="lead">Welcome to your admin dashboard! Here you can edit your information!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<form name="editadmin" class="form-horizontal" role="form" action="updateaccount.php" method="get" enctype="text/plain">
					<input type="hidden" name="id" value="<?php echo $result_row['admin_id']; ?>"/>
					
					<div class="form-group">
						<label for="newName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="newName" name="name" value="<?php echo $result_row['admin_full_name']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="newEmail" name="email" value="<?php echo $result_row['admin_email']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="newPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="newPassword" name="password" value="<?php echo $result_row['admin_password']; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<a href="javascript:document.editadmin.submit()" class="btn btn-success">UPDATE</a>
							<a class="btn btn-danger" href="deleteadmin.php?id=<?php echo $result_row['admin_id'] ?>">DELETE ACCOUNT</a>
						</div>
					</div>
				</form>
			</div>
		</div>


	</div>
<?php
}
include ('includes/footer.php');
?>
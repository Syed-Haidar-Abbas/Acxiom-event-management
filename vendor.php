<?php

	$page_title = "Admin";

	require_once ('includes/header.php');
	require_once ('includes/database.php');

	//select statement
	$query_str = "SELECT * FROM products";

	//execut the query
	$result = $conn->query($query_str);

	//Handle selection errors
	if (!$result) {
		$errno = $conn->errno;
		$errmsg = $conn->error;
		echo "Selection failed with: ($errno) $errmsg<br/>\n";
		$conn->close();
		exit;
	}else { //display results in a table

?>
	<div class="container wrapper">

		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Admin</li>
		</ul>

		<h1 class="text-center">Welcome, Admin</h1>


		<div class="product-list">
			<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
				<div class="col-xs-4">
					<form action="manage_cart.php" method="POST">
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
								<a href="#?id=<?php echo $result_row['product_id']?>">
									<img src="<?php echo $result_row['product_img'] ?>" />
								</a>
								<button type="submit" name="Add_to_Cart" class="btn btn-info">Add to Cart</button>
								<input type="hidden" name="Item_Name" value="<?php echo $result_row['product_name'] ?>">
								<input type="hidden" name="Price" value="<?php echo $result_row['product_price'] ?>">
							</div>
							<h3 class="text-center">
								<?php
								echo "<a href='#?id=" . $result_row['product_id'] . "'>", $result_row['product_name'], "</a>";
								?>
							</h3>
						</div>
					</div>
				</form>
				</div>
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
	<h2 class="text-center">Add Items</h2>
	<?php

	require_once('includes/database.php');
	require_once ('includes/header.php');

	?>
	<div class="container wrapper">
	<div class="col-xs-8 col-xs-offset-2">
		<form class="form-horizontal" role="form" action="processProduct.php" method="get" enctype="text/plain">
		<div class="form-group">
			<label for="newProductName" class="col-sm-3 control-label">Product Name</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="newProductName" name="product_name" placeholder="Product Title" required>
			</div>
		</div>
		<div class="form-group">
			<label for="ProductYear" class="col-sm-3 control-label">Product Price</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="ProductPrice" name="product_price" placeholder="Price" required>
			</div>
		</div>
		<div class="form-group">
			<label for="newImage" class="col-sm-3 control-label">Product Image</label>
			<div class="col-sm-9">
			<input type="text" id="newImage" class="form-control" name="image" placeholder="Enter URL" required>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
			<button type="submit" class="btn btn-success">Add Product</button>
			</div>
		</div>
		</form>
	</div>
	</div>
	<h2 class="text-center">Transactions</h2>
	<p>This feature is currently not available!</p>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>
<?php

require_once('includes/database.php');
$page_title = "Add Product";
require_once ('includes/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Add Product</li>
  </ul>

  <h1 class="text-center">ADD PRODUCT</h1>
  <p class="lead text-center">Add a new product</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processproduct.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newProductName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newProductName" name="product_name" placeholder="Product Title" required>
        </div>
      </div>       
      <div class="form-group">
        <label for="ProductBio" class="col-sm-3 control-label">Storyline</label>
        <div class="col-sm-9">
          <textarea type="email" class="form-control" id="ProductBio" name="bio" rows="4" placeholder="Enter Description" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Cover URL</label>
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

<?php
  include('includes/footer.php');
?>
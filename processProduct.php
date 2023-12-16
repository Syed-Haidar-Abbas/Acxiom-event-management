<?php
//start a new session
session_start();

$page_title = "Add Product";

require_once 'includes/header.php';
require_once 'includes/database.php';

$title = $_GET['product_name'];
$bio = $_GET['product_bio'];
$image =  $_GET['product_image'];
$price = $_GET['product_price'];

//define sql statement
$query_str = "INSERT INTO product VALUES (NULL,'$title', '$price', '$bio', '$image')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


header("Location: product.php");

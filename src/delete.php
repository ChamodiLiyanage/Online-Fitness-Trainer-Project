<?php
include_once ("config.php");

//get the product id from the url
$product=$_GET['product']; //catches the product id
$id=$_GET['id']; //catches the user regNo

// deletes the row from the table cart
$sql = "DELETE FROM cart WHERE regNo=$id AND productNo=$product";
if ($connection->query($sql))
{
  echo "Record deleted successfully";
} 
else
{
  echo "Error deleting record: " . $connection->error;
}

$connection->close();

header("Location:cart.php"); //returns to cart page after completion

?>



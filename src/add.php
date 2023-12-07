<?php
include_once ("config.php");

//get the product id from the url
$product=$_GET['product']; //catches the product id
$id=$_GET['id']; //catches the user regNo

// deletes the row from the table cart
$sql = "INSERT INTO cart values($id,$product)";
if ($connection->query($sql))
{
  echo "Record deleted successfully";
} 
else
{
  echo "Error Adding to cart: " . $connection->error;
}

$connection->close();

header("Location:programs.html"); //returns to program page

?>

<?php
	require_once ("config.php");
	// get the user input from the form into variables
	$name = $_POST["field1"]; 
	$age = $_POST["field2"];
	$email = $_POST["field3"];
	$password = $_POST["field4"];
	$contact = $_POST["field5"];
	$address= $_POST["field6"]; 
	
	// update the database values with the user input values
	$sql ="update customer set name='$name',age='$age',email='$email',password='$password',contact='$contact',address='$address'";
	if(mysqli_query($connection, $sql)){
		echo "<script> alert('Records added successfully!!!!</script>";
	} 
	else{
		echo "<script> alert('ERROR: Could not update. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($connection);
	header("Location:update.php"); //returns to update page after completion

?>
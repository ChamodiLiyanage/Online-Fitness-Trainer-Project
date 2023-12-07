<?php
	require_once ("config.php");
	// get the user input from the form into variables
	$quantity = $_POST["field1"]; 
	$price = $_POST["field2"];
	$email = $_POST["field3"];
	$name = $_POST["field4"];
	$message = $_POST["field5"];
	
	// update the database values with the user input values
	$sql ="INSERT INTO gift VALUES('$quantity','$price','$email','$name','$message')";
	if(mysqli_query($connection, $sql)){
		echo "<script> alert('Records added successfully!!!!</script>";
	} 
	else{
		echo "<script> alert('ERROR: Could not Insert. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($connection);
	header("Location:gift.html"); //returns to update page after completion
?>
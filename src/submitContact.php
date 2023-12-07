<?php
	require_once ("config.php");
	// get the user input from the form into variables
	$name = $_POST["field1"]; 
	$email = $_POST["field2"];
	$subject = $_POST["field3"];
	$message = $_POST["field4"];
	
	// update the database values with the user input values
	$sql ="INSERT INTO contact VALUES('$name','$email','$subject','$message')";
	if(mysqli_query($connection, $sql)){
		echo "<script> alert('Records added successfully!!!!</script>";
	} 
	else{
		echo "<script> alert('ERROR: Could not Insert. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($connection);
	header("Location:contact.html"); //returns to update page after completion

?>
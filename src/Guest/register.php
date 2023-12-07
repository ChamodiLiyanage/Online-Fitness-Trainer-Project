<?php
	require_once ("config.php");
	// get the user input from the form into variables
	$name = $_POST["flname"]; 
	$address= $_POST["straddress"].",".$_POST["straddress2"].",".$_POST["city"].",".$_POST["state"];
	$contact=$_POST["contactNo"];
	$age=$_POST["age"];
	$age=$_POST["age"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	
	
	// update the database values with the user input values
	$sql ="INSERT INTO customer VALUES('DEFAULT','$name','$email','$pwd','$contact','Credit card','$address','$age')";
	if(mysqli_query($connection, $sql)){
		echo "<script> alert('Records added successfully!!!!</script>";
	} 
	else{
		echo "<script> alert('ERROR: Could not Insert. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($connection);
	header("Location:registrationpage2.html"); //returns to update page after completion

?>
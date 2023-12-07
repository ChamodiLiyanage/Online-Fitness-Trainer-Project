<?php
require_once ("config.php");
$email=$_POST["field1"];
$pass=$_POST["field2"];
$sql= "SELECT regNo,password,email FROM customer where email='$email'"; //get the password and email and 
$result = $connection->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    if($row["email"]==$email && $row['password']==$pass) //
	{
		header("Location:../homepage2.php?id=$row[regNo]");
	}
	else
	{
		echo "<script> alert('Incorrect Password.Please re-enter')</script>" ;
		echo"<script>window.location.href='login.html'</script>";	
	}
   }
}
else 
{
  echo "<script> alert('Incorrect Email.Please re-enter')</script>" ;
  echo"<script>window.location.href='login.html'</script>";	
}
$connection->close();

?>
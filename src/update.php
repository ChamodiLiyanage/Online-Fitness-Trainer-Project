<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" href="styles/update.css">
<link rel="stylesheet" href="styles/template.css">
<script type="text/javascript" src="js/script.js"></script>
<title>Kettlebell Zone</title>
</head>
<body>
    <div class="topnav">
        <img class="logo2" src="images/img1.jpg" alt="image is here">
        <a class="menuElements" href="homepage2.html">Home</a>
        <a class="menuElements"  href="programs.html">Programs</a>
        <a class="menuElements"  href="yourPrograms.php">Your Programs</a>
        <a class="menuElements"  href="contact.html">Contact Us</a>
        <a class="menuElements"  href="about.html">About</a>
		<div style="float:right">
		<form style="float:left">
        <input id="search" type="text" placeholder="Search...">
		<input type="image" class="cart" src="icon/search.png" alt="search"></input>
		</form>
		<a href="cart.php"><img class="cart" src="icon/bag.png" alt="cart"></a> 
		<a href="user.php"><img class="logo3" src="images/user3.png" alt="image is here"></a>
		</div>
 </div>
<br>
<div class="left">
<div>
<img id="userImg" src="images/program1.png" alt="user image">
<form style="float:right">
  <input class="imgBttn" type="file"  accept="image/*" name="image" id="file">
  <input class="imgBttn" type="submit">
</form>
</div>

<div class="user">
<div>
<h3>User Details</h3>
</div>
<hr>
<?php
require ("config.php");
$id=$_GET['id']; //get user regNo from the url
$sql= "SELECT name,age,email,bill,address,contact,regNo,password FROM customer WHERE regNo='$id'";
$result= $connection->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo ("<p>Name: ".$row["name"]."</p>");
		echo ("<p>Age: ".$row["age"]."</p>");
		echo ("<p>Email: ".$row["email"]."</p>");
		echo ("<p>Password: ".$row["password"]."</p>");
		echo ("<p>Contact Number: ".$row["contact"]."</p>");
		echo ("<p>Billing Method: ".$row["bill"]."</p>");
		echo ("<p>Address: ".$row["address"]."</p>");
	}
}
else
{
	echo "no results";
}
$connection->close(); 
?>
</div>
</div>
<div class="right">
<center>
<h3>Update User Details</h3>
</center>
<hr>
<center>
<form target="_blank" method="POST" action="submit.php" >

    <input class="info" type="text" name="field1" placeholder="Name" />
	<br><br>
    <input  class="info type="number" name="field2" placeholder="Age" />
	<br><br>
    <input  class="info type="text" name="field3"  placeholder="Email" />
	<br><br>
    <input  class="info type="text" name="field4" placeholder="Password" />
	<br><br>
	<input  class="info type="text" name="field5" placeholder="Contact Number" />
	<br><br>
	<textarea  class="info" name="field6" placeholder="Address"></textarea>
	<br><br>
	<input class="update" type="submit" value="Update" />

</form>
</center>
</div>

<div class="clear">
<a href="user.php"><input class="update" type="submit" value="Done" /></a>
<hr>
<footer> <!-- the footer section-->
<div>
 <p class="footText">Copyright @ 2022 Kettlebell Zone.All rights Reserved.<br><a class="foot" href=" ">Terms of use | Privacy Policy</a></p>
 <a href="https://www.twitter.com"> <img class="icons" src="icon/twitter.png"></a>
 <a href="https://www.instagram.com "> <img class="icons" src="icon/instagram.png"></a>
 <a href="https://www.facebook.com"> <img class="icons" src="icon/facebook.png"></a>
 <a href="https://www.pinterest.com"> <img class="icons" src="icon/pinterest.png"></a>
 <a href="https://www.youtube.com"> <img class="icons" src="icon/youtube.png"></a>
</div>
</footer>
</div>
</body>
</html>
</html>
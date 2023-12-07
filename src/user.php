<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" href="styles/user.css">
<link rel="Stylesheet" href="styles/template.css">
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
<form style="float:right" action="/action_page.php">
  <input id="imgBttn" type="file" name="filename" value="change">
  <input id="imgBttn" type="submit">
</form>
</div>

<div class="user">
<div>
<h3>User Details</h3>

</div>
<hr>
<?php
require ("config.php");
$sql= "SELECT name,age,email,regNo,contact FROM customer WHERE regNo='1'";
$result= $connection->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo ("<p>Name: ".$row["name"]."</p>");
		echo ("<p>Age: ".$row["age"]."</p>");
		echo ("<p>Email: ".$row["email"]."</p>");
		echo ("<p>Contact Number: ".$row["contact"]."</p>");
		echo("<a href='update.php?id=$row[regNo]'><input id='userEdit' type='button' value='Edit'></input></a>");
	}
}
else
{
	echo "no results";
}
$connection->close(); 
?>
</div>
<br>
<div class="user">
<div>
<h3>Billing</h3>
</div>
<hr>
<?php
require ("config.php");
$sql= "SELECT bill,address,regNo FROM customer WHERE regNo='1'";
$result= $connection->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo ("<p>Billing Method: ".$row["bill"]."</p>");
		echo ("<p>Address: ".$row["address"]."</p>");
		echo("<a href='update.php?id=$row[regNo]'><input id='billingEdit' type='button' value='Edit'></input></a>");
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
<h3>Account Settings</h3>
</center>
<hr>
<?php
require ("config.php");
$sql= "SELECT email,password,regNo FROM customer WHERE regNo='1'";
$result= $connection->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo"<h4>Registered Email </h4>";
		echo ("<p>".$row["email"]."</p>");
		echo("<a href='update.php?id=$row[regNo]'><input id='userEdit' type='button' value='Edit'></input></a>");
		echo"<h4>Password </h4>";
		echo ("<p>".$row["password"]."</p>");
		echo("<a href='update.php?id=$row[regNo]'><input id='userEdit' type='button' value='Edit'></input></a>");
		
	}
}
else
{
	echo "no results";
}
$connection->close(); 
?>

<h4>Theme</h4>
<input id="toggleBttn" type="button" value="Dark Mode" onclick="darkMode()"></input>
<br>
<h4 id="mail">Recieve Email Notifications</h4>
<input id="check" type="checkbox"></input>
</div>
<div class="clear">
<a href="Guest/homepage.html"><input id="imgBttn" type='button' value='Logout'></input></a>
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
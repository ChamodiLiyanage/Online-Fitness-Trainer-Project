<!DOCTYPE html>
<html>
<head>
    <title>Kettlebell Zone</title>
    <link rel="stylesheet" type="text/css" href="styles/template.css">
	<link rel="stylesheet" type="text/css" href="styles/onclick.css">
</head>

<body>
    <div class="topnav">
        <img class="logo2" src="images/img1.jpg" alt="image is here">
		<a class="menuElements" href="homepage2.php">Home</a>
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

<?php
require_once("config.php");
$program=$_GET['program'];
$sql= "SELECT pName,description FROM product WHERE productNo='$program'"; 
$result = $connection->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {

		echo "<h1>".$row['pName']."</h1>";
		echo "<h3>".$row['description']."</h3>";
   }
}
else 
{
  echo "Error.Contact Page Admin" ;
}
$connection->close();

?>
<br><br>
<div style="background-color:#333;">
<center>
<video width="700" height="500" controls>
  <source src="videos/vid.mp4" type="video/mp4">
</video>
</center>
</div>
<h2>Live Links</h2>
<p>6.30am: <a class="links" href="https://zoom.us ">https://zoom.us</a></p>
<p>3.30Pm: <a class="links" href="https://zoom.us ">https://zoom.us</a></p>
<p>6.30Pm: <a class="links" href="https://zoom.us ">https://zoom.us</a></p>
<p>8.30Pm: <a class="links" href="https://zoom.us ">https://zoom.us</a></p>


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

</body>

</html>
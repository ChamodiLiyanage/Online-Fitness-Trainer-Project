<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" href="styles/yourPrograms.css">
<link rel="Stylesheet" href="styles/template.css">
<script src="js/confirm.js"></script>
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
<h1 id="heading1">Your Programs</h1>
<?php
require ("config.php");
$sql= "SELECT c.productId,p.pName,p.description,c.regNo FROM cuspro c, product p where c.regNo='1' AND c.productId=p.productNo";
$result= $connection->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo("<div class='programs'>");
		echo("<a href='onclick.php?program=$row[productId]'><img class='pImg' src='images/program7.png' alt='fitness image'></a>");
		echo"<br>";
		echo("<div>");
		echo("<a class='pText' href='onclick.php?program=$row[productId]'>".$row['pName']."</a>");
		echo("<button class='remove' onclick='deleteUserProgram($row[productId],$row[regNo]);'>Remove</button>");
		echo"</div>";
		echo"<br>";
		echo("<p class='pPara'>".$row['description']."</p>");
		echo("</div>");
		echo("<br><br>");
	}
}
else
{
	echo ("<center><h1>No Programs to Display</h1><br>");
	echo ("<a href='programs.html'><input class='button' type='button' value='Browse Programs'></input></a>");
	echo"</center>";
}
$connection->close(); 
?>

<br><br>
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
</html>
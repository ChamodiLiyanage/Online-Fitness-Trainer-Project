<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" href="styles/template.css">
<link rel="stylesheet" href="styles/cart.css">
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

<h1 id="heading1">Shopping Cart</h1>
<br>
<?php
require "config.php";
$sql="SELECT c.productNo,c.regNo, p.pName,p.price FROM cart c,product p WHERE c.productNo=p.productNo AND c.regNo='1'";
$result= $connection->query($sql);
$total=0; //declare total variable to calculate total of cart
if($result->num_rows>0)
{
	echo "<center>";
	echo"<div>";
	echo "<table>";
	echo "<tr><th>Product name</th> <th>Price</th><th></th></tr>";
	while($row=$result->fetch_assoc())
	{
		echo"<div class='left'>";
		echo ("<tr><td>".$row["pName"]."</td>");
		echo ("<td>".$row["price"]."</td>");
		echo"</div>";
		echo("<td><a href='delete.php?product=$row[productNo]&id=$row[regNo]'><input class='remove' type='button' value='Remove'></input></a></td>");
		echo "</tr>";
		$total=$total+$row["price"];
	}
	echo "</table>";
	echo"</div>";
	echo "<h3>The total is: ".$total."</h3>";
	echo "<a href='https://www.paypal.com/lk/home' target='_blank'><button class='button'>Proceed To Pay</button></a>";
	echo "</center>";
}
else
{
	echo ("<center><h1>No Items in cart</h1><br>");
	echo ("<a href='programs.html'><input class='button' type='button' value='Browse Programs'></input></a>");
	echo"</center>";
}
$connection->close(); 
?>


<footer> <!-- the footer section-->
<div class="footer">
<hr>
 <p class="footText">Copyright @ 2022 Kettlebell Zone.All rights Reserved.<br><a class="foot" href=" ">Terms of use | Privacy Policy</a></p>
 <a href="https://www.twitter.com"> <img class="icons" src="icon/twitter.png"></a>
 <a href="https://www.instagram.com "> <img class="icons" src="icon/instagram.png"></a>
 <a href="https://www.facebook.com"> <img class="icons" src="icon/facebook.png"></a>
 <a href="https://www.pinterest.com"> <img class="icons" src="icon/pinterest.png"></a>
 <a href="https://www.youtube.com"> <img class="icons" src="icon/youtube.png"></a>
</div>
</footer> <!-- end of footer-->
</body>
</html>
</html>
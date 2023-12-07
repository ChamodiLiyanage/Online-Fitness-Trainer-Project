<!DOCTYPE html>
<?php require ("config.php");
?>
<html>
<head>
<link rel="Stylesheet" href="styles/template.css">
<link rel="Stylesheet" href="styles/workout.css">
<title>workout page</title>
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
 </div><!--End of top navigation bar-->

<h1 id="heading1"> Welcome to Kettlebell Zone!</h1>


<!--title for page-->
<div class="container">
  <img src="images\title.jpg"  style="width:100%;" width="2000" height="150">
  <div class="centered"><h1><u>Workout Plans</u></h1></div>
</div>
<center>
<!--1st row-->
<div>
  <div class="column" >
    <!--1st col 1st row-->
    <img src="images\pic1.jpg" width="200" height="200">
    <h2><u>Strength</u></h2>
    <p>Length : 2 weeks </p>
	<p>Avg. Duration : 30 minutes </p>
	<p>Days per week : 4+1 optional</p>
	<p>Body Focus : Total Body </p>
	<?php
	echo"<a href='add.php?product=3&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	
	<!-- 2nd row 1st column-->
	<br>
	<img src="images\pic2.jpg" width="200" height="200">
    <h2><u>Functional Fitness Sereies</u></h2>
    <p>Length : 1 month </p>
	<p>Avg. Duration : 2 hours with break </p>
	<p>Days per week : 5+1 optional</p>
	<p>Body Focus : Total Body </p>
	
	<?php
	echo"<a href='add.php?product=4&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	
	<!-- 3rd row first column-->
	<br>
	<img src="images\pic3.jpg" width="200" height="200">
    <h2><u>APPLE BOTTOM BOOTY</u></h2>
    <p>Length : 4 weeks  </p>
	<p>Avg. Duration : 45 minutes </p>
	<p>Days per week : 5+1 optional</p>
	<p>Focus : sculpt those glutes </p>
	
	<?php
	echo"<a href='add.php?product=5&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	
  </div>
  
  <!--2nd column 1st row-->
  <div class="column" >
    <!-- 1st col -->
    <img src="images\pic4.jpg" width="200" height="200">
    <h2><u>Let it burn</u></h2>
    <p>Length : 2 weeks </p>
	<p>Avg. Duration : 1 hour </p>
	<p>Days per week : 5+1 optional</p>
	<p>Body Focus : Total Body </p>

	<?php
	echo"<a href='add.php?product=6&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	<!-- 2nd row 2nd column-->
	<br>
    <img src="images\pic5.jpg" width="200" height="200">
    <h2><u>Bulk</u></h2>
	<p>(Heavier weight, lower reps, rest between sets)</p>
    <p>Length : 1 month </p>
	<p>Avg. Duration : 30 minutes  </p>
	<p>Days per week : 5</p>
	<?php
	echo"<a href='add.php?product=7&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	<!-- 3rd col-->
	<br>
	<img src="images\pic6.jpg" width="200" height="200">
    <h2><u>XTREME TRX</u></h2>
    <p>Length : 4 weeks  </p>
	<p>Avg. Duration : 40 minutes </p>
	<p>Days per week : 5+1 optional</p>
	<p>(Body weight challenge) </p>
	<?php
	echo"<a href='add.php?product=8&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
  </div>
  
  <!--3rd column-->
  <div class="column" >
  <!--1st row-->
    <img src="images\pic7.jpg" width="200" height="200">
    <h2><u>Legs, Butt and Thighs</u></h2>
    <p>Length : 2 weeks </p>
	<p>Avg. Duration : 40 minutes </p>
	<p>Days per week : 3+1 optional</p>
	<p>Body Focus : Total Body(Get fit body) </p>
	<?php
	echo"<a href='add.php?product=9&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	<!--2nd row -->
	<br>
	<img src="images\pic8.jpg" width="200" height="200">
    <h2><u>Hot Butt & Guts</u></h2>
    <p>Length : 1 month </p>
	<p>Avg. Duration : 30 minutes </p>
	<p>Days per week : 4+1 optional</p>
	<p>Body Focus : guts and core </p>
	<?php
	echo"<a href='add.php?product=10&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
	<!--3rd row-->
	<br>
	<img src="images\pic9.jpg" width="200" height="200">
    <h2><u>Special KBZ Plan</u></h2>
    <p>Length : 3 week </p>
	<p>Avg. Duration : 30 minutes </p>
	<p>Days per week : 5+1 optional</p>
	<p>Body Focus : Full Body </p>
	<?php
	echo"<a href='add.php?product=7&id=11'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
  </div>
</div>
</center>
<footer> <!-- the footer section-->
<div style="clear:both">
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
<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" href="styles/template.css">
<link rel="Stylesheet" href="styles/pilot.css">

<title>pilot page</title>
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

<h1 id="heading1"> Welcome to Kettlebell Zone!</h1>

<!--title-->
<div class="container">
  <img src="images\title.jpg"  style="width:100%;" width="2000" height="150">
  <div class="centered"><h1><u>Pilot Plan</u></h1></div>
</div>

<!--1st row-->
<div>
  <div class="column" >
    <!--1st col-->
    <img src="images\yoga1.jpg" width="200" height="200">
    <h2><u>Plan I</u></h2>
    <p>Length : 2 weeks </p>
	<p>Avg. Duration : 7 minutes </p>
	<p>Days per week : 7</p>
	<P>Price:700</p>

	<?php
	echo"<a href='add.php?product=10&id=12'><input class='buy' type='Button' value='Buy'></input></a>";
	?>
	<br>
   </div>


  <div class="column" >
	<!-- 2nd col-->
	<br>
	<img src="images\yoga2.jpg" width="200" height="200">
    <h2><u>Plan II</u></h2>
    <p>Length : 3 weeks  </p>
	<p>Avg. Duration : 10 minutes </p>
	<p>Days per week : 7 optional</p>

	<?php
	echo"<a href='add.php?product=13&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	<br>
 </div>

  <div class="column" >	
	<!-- 3rd col-->
	<br>
	<img src="images\yoga3.jpg" width="200" height="200">
    <h2><u>Plan III</u></h2>
    <p>Length : 4 weeks  </p>
	<p>Avg. Duration : 15 minutes </p>
	<p>Days per week : 7 </p>
	
	<?php
	echo"<a href='add.php?product=14&id=1'><input class='buy' type='Button' value='Buy'></input></a>";
	?>
  </div>
<div class="video">
<h1>Stress Redux</h1>
<video width="1000" height="500" controls>
  <source src="https://www.youtube.com/watch?v=gC_L9qAHVJ8" type="video/mp4">
</video>
</div>

<center>
<h2 class="solid">Post a comment</h2>
</div>
<div>
<form action="pilot_pg.html">
<center>
  <textarea class="comment" name="comment"  placeholder="Comment" rows="4" cols="50"></textarea>
  <br>
  <input class="buy" type='Button' value='Post'></input>
  <center>
</form>
</div>
</center>

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
</footer> <!-- end of footer-->
</body>
</html>
</html>
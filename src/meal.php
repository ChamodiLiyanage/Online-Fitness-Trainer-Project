<!DOCTYPE html>
<?php require ("config.php");
?>
<html>
<head>
<link rel="Stylesheet" href="styles/template.css">
<link rel="Stylesheet" href="styles/meal.css">
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
 </div>

<h1 id="heading1"> Welcome to Kettlebell Zone!</h1>


<!--title for page-->
<div class="container">
  <img src="images\title.jpg"   width="2000" height="150">
  <div class="centered"><h1><u>Meal Plans</u></h1></div>
</div>

<!--1st row-->
<div class="row">
<h2>Pre-workout meal plan</h2>
<p>(choose one meal in each pack)</p>
  <div class="column" >
    <img src="images\pre1.png" width="200" height="200">
    <h4>
	1-2 hour before<br><br>
	* It helps to work out for a longer duration.<br>
	* It improves performance.<br>
	* It fights fatigue.<br>
	</h4>
	<?php
	echo"<a href='add.php?product=15&id=1'><input class='buy' type='Button' value='Buy'></input></a>";
	?>
	</div>
	<div class="column">
	<img src="images\pre2.png" width="200" height="200">
    <h4>
	2-4 hour before<br><br>
	* It helps to power through intense training sessions.<br>
	* It develops muscle strength.<br>
	* It is essential for long-term muscle-building goals.<br>
	</h4>
	<?php
	echo"<a href='add.php?product=16&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	</div>
	<div class="column">
	<img src="images\pre3.jpg" width="200" height="200">
    <h4>
	less than 1 hour <br><br>
	* Faster recovery.<br>
	* Fuel your body.<br>
	* Develops muscle strength.</h4>
	
	<?php
	echo"<a href='add.php?product=17&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	</div>
</div>
<!--2nd row-->	
<div class="row">
<br>
<h2>Post-workout meal plan</h2>
<p>(choose one meal in each pack)</p>
  <div class="column" >
    <img src="images\post.jpg" width="200" height="200">
    <h4>
	Post-Workout Meals<br><br>
    Minimize muscle damage/muscle protein breakdown.<br>
    Assist in building muscle/increase muscle protein synthesis.<br>
    Replenish muscle glycogen (the stored form of carbohydrate)<br>
    Reduce cortisol (stress hormone) levels.<br>
	</h4>
	<?php
	echo"<a href='add.php?product=18&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	</div>
</div>	
<!--row 3-->
<div class="row">
<br>
	<h2>Fat Burning meal plan</h2>
	<p>(choose one meal in each pack)</p>
  <div class="column" >
    <img src="images\fat.jpg" width="200" height="200">
    <h4>
	Maintaining a trim midsection does more than make you look great—it can help
	you live longer.<br>
	Larger waistlines are linked to a higher risk of heart disease,
	diabetes and even cancer.<br>
	Losing weight, especially belly fat, also improves 
	blood vessel functioning and also improves sleep quality.
    </h4>
	<?php
	echo"<a href='add.php?product=19&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	</div>
</div>
<!--row 4-->
<div class="row">
<br>
 <h2>Belly Fat Reducing meal plan</h2>
<p>(choose one meal in each pack)</p>

  <div class="column" >
    <img src="images\belly.jpg" width="200" height="200">
    <h4>
	Benefits: <br><br>Improves Sleep. <br>Increases our Energy Levels.
	<br>Improves Muscle health.<br>Reduces Risk of Chronic Disease.<br>
    Pain Reduction.<br>Improves Skin Health.
	</h4>
	<?php
	echo"<a href='add.php?product=20&id=1'><input class='buy'  type='Button' value='Buy'></input></a>";
	?>
	</div>	
</div>
<footer> <!-- the footer section-->
<div style="clear:both">
<br><br>
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
<?php
//Start the PHP session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Registration - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container">
	
<h2 style = "text-align:center;">Thanks for Registering!</h2>
<h4 style = "text-align:center;">To complete registration, please fill out the following information. </br> It will be editable later. </h4>
<form class="form-signin" action="new_user.php" method="post">

<h3>Delegate Email</h3>
	<h5>This is the email you just used to register for your account.</h5>
	<input type="email" id="email" class="form-control" placeholder="john.doe@ucc.on.ca" name="email" required="" autofocus="">

	<h3>Delegate First Name</h3>
	<h5>This is how your first name will appear on the delegate nametag.</h5>
	<input type="text" id="first_name" class="form-control" placeholder="First Name" name="first_name" required="">

	<h3>Delegate Last Name</h3>
	<h5>This is how your last name will appear on the delegate nametag.</h5>
	<input type="text" id="last_name" class="form-control" placeholder="Last Name" name="last_name" required=""> 

	<h3>Delegate School</h3>
	<h5>This is how your school will appear on the delegate nametag.</h5>
	<p>If your school is not in this dropdown menu, your school's registration form was submitted incorrectly. Please <a href="contact_us.php">contact us</a> for further information.
	</p>
	<select class="form-control" id="school" name="school" placeholder="DELEGATE SCHOOL" required="">
		<option value="Bishop Strachan School">Bishop Strachan School</option>
		<option value="Branksome Hall">Branksome Hall</option>
		<option value="St. Clements School">St. Clements School</option>
		<option value="Upper Canada College">Upper Canada College</option>
		<option value="University of Toronto Schools">University of Toronto Schools</option>
	</select>

	<h3>Special Notes:</h3>
	<h5>
	These special notes will be used to accomodate special needs. Examples include a vegetarian diet, physical assistance, or religious accomodations.
	</br>
	Leave blank if none needed.
	</h5>
	<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" placeholder="SPECIAL INFO"></textarea>

	<button class="btn btn-lg btn-primary" type="submit" value="Login">Register</button>

</form>

<?php
include_once("footer.php")
?>
 <script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/nav-collapse.js"></script>

</div>
</body>
</html>

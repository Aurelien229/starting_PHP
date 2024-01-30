<?php
$hello = "Hi";
$gender = $_GET['gender'];
$message = ($gender == "female") ? $hello." lady": $hello." man";

echo $message;
?>
<form method="get" action="">
<label for="gender1">female :</label>
	<input type="radio" name="gender" value="female" id="gender1">
	<label for="gender2">male:</label>
	<input type="radio" name="gender" value="male" id="gender2">
	<input type="submit" name="submit" value="Submit">
</form>
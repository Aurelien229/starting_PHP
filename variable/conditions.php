<!-- <?php
//
//1  
//

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>


<?php
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if ($room_filthiness === "health hazard") {
	echo "Yuk, Room is a health hazard! Let's clean it up!";
	cleanup_room();
	echo "<br>Room is now clean!";
} elseif ($room_filthiness === "filthy") {
	echo "Yuk, Room is filthy : let's clean it up!";
	cleanup_room();
	echo "<br>Room is now clean!";
} elseif ($room_filthiness === "dirty") {
	echo "Yuk, Room is dirty : let's clean it up!";
	cleanup_room();
	echo "<br>Room is now clean!";
} elseif ($room_filthiness === "clean") {
	echo "<br>Nothing to do, room is already clean.";
} elseif ($room_filthiness === "immaculate") {
	echo "<br>Nothing to do, room is immaculate!";
} else {
	echo "<br>Invalid room state.";
}
?>


<?php
//
// 2. "Different greetings according to time" Exercise
//

 $dt = new \DateTime();
date_default_timezone_set("Europe/Brussels");
$now = date('H:i:s');
echo $now;
// Test the value of $now and display the right message according to the specifications.
if( $now >= '05:00:00' && $now <= '09:00:00 '){
	echo "<br>Good morning !";
}
else
	if( $now >= '09:01:00' && $now <= '12:00:00'){
		echo "<br>Good day !";
	}
else
	if( $now >= '12:01:00' && $now <='16:00:00' ){
		echo "<br>Good afternoon !";
	}
else
	if( $now >= '16:01:00' && $now <= '21:00:00'){
		echo "<br>Good evening !";
	}
else
	if( $now >= '21:01:00' && $now <= '04:59:00'){
		echo "<br>Good night !";
	}
?>


<?php
//
// 3.4.5 "Different greetings according to age" Exercise
//
$age =$_GET['age'];
// var_dump($age);
$gender =$_GET['gender'];
$language =$_GET['language'];


if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])){
	// var_dump($gender);
	if($age < '12'){
			if($gender == "female"){
				if($language == "yes"){
					echo "Hello Little Girl!";
				}
				else{
					echo "Alhoha Little Girl!";
				}
				}
			else{
				if($language == "yes"){
					echo "Hello Little Boy!";
				}
				else{
					echo "Alhoha Little Boy!";
			}
			
		}
	}
	else{
		if($age>= '12' && $age < '18'){
			if($gender == "female"){
				if($language == "yes"){
					echo "Hello Miss Teen!";
				}
				else{
					echo "Alhoha Miss Teen!";
			}
		}
			else{
				if($language == "yes"){
					echo "Hello Mister Teen!";
				}
				else{
					echo "Alhoha Mister Teen!";
			}
			}
		}
	else
		if($age >= '18' && $age <= '115'){
			if($gender == "female"){
				if($language == "yes"){
					echo "Hello Mrs!";
				}
				else{
					echo "Alhoha Mrs!";
			}
			}
			else{
				if($language == "yes"){
					echo "Hello Sir!";
				}
				else{
					echo "Alhoha Sir!";
			}

			}
		}
	else
		if($age > '115') {
			echo "<br>Wow!Still alive ? Are you a robot, like me ? Can i hug you ?";
	}
}
}
?>
<form method="get" action="">
	<label for="age">Please type your age :</label>
	<input type="" name="age">

	<label for="gender1">female :</label>
	<input type="radio" name="gender" value="female" id="gender1>
	<label for="gender2">male:</label>
	<input type="radio" name="gender" value="male" id="gender2>

	<label for="language">Do you speak english?</label>
	<label for="language">Yes</label>
	<input type="radio" name="language" value="yes" id="y">
	<label for="language">No</label>
	<input type="radio" name="language" value="No" id="n">
	<input type="submit" name="submit" value="Greet me now">
</form> -->

<!-- <?php
//
// 6. Girl Soccer
//
$name =$_GET['name'];
$age =$_GET['age'];
$gender =$_GET['gender'];

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
	if($age >= '21' && $age <= '40'){
		if($gender == 'female'){
			echo "welcome to the team,$name. ";
		}
		else{
			echo "Sorry, you don't match the criteria.";
		}
	}
	else{
		echo "Sorry, you don't match the criteria.";
	}
}

?> -->
<!-- <form method="get" action="">
	<label for="name">Enter your name :</label>
	<input type="" name="name">

	<label for="age">Please type your age :</label>
	<input type="" name="age">

	<label for="gender1">female :</label>
	<input type="radio" name="gender" value="female" id="gender1">
	<label for="gender2">male:</label>
	<input type="radio" name="gender" value="male" id="gender2">
	<input type="submit" name="submit" value="Submit">
</form> -->

<!-- <?php
//
// 7. Girl Soccer
//
$name =$_GET['name'];
$age =$_GET['age'];
$gender =$_GET['gender'];

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
	if($age >= '21' && $age <= '40' && $gender == 'female'){
			echo "welcome to the team,$name. ";
		}
	
}

?>
<form method="get" action="">
	<label for="name">Enter your name :</label>
	<input type="" name="name">

	<label for="age">Please type your age :</label>
	<input type="" name="age">

	<label for="gender1">female :</label>
	<input type="radio" name="gender" value="female" id="gender1">
	<label for="gender2">male:</label>
	<input type="radio" name="gender" value="male" id="gender2">
	<input type="submit" name="submit" value="Submit">
</form> -->

<?php
//
// 8
//
$result =$_GET['result'];

if(isset($_GET['result'])){
	if($result <= '4'){
		echo "This work is really bad. What a dumb kid!";
	}
else
	if($result >= '5' && $result <='9'){
		echo "This is not sufficient. More studying is required.";
	}
else
	if($result == '10'){
		echo "barely enough!";
	}
else
	if($result >= '11' && $result <= '14'){
		echo "Not bad!";
	}
else
	if($result >= '15' && $result <= '18'){
		echo "Bravo, bravissimo!";
	}
else
	if($result >= '19' && $result <= '20'){
		echo "Too good to be true : confront the cheater!";
	}
}
?>
<form method="get" action="">
	<label for="result">result</label>
	<input type="" name="result" value="submit">
	<input type="submit" name="submit" value="Submit">
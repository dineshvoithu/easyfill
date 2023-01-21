<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <head>
    <title>Registration Page</title>
	
  </head>
  <div class="back">  <a href="http://localhost/llifysae/homepage.php">Back To HomePage</a><br><br></div>



<?php

	$name = $_POST['name'];
	$vehicletype = $_POST['vehicletype'];
	$fueltype = $_POST['fueltype'];
	$litres = $_POST['litres'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','order');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into ordernow (name, vehicletype, fueltype ,  litres, email, location, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $name, $vehicletype, $fueltype, $litres, $email, $location, $number);
		$execval = $stmt->execute();
		#echo $execval;
		echo "Your Order has Been Placed Our caption will Call You";
		$stmt->close();
		$conn->close();
	}
?>
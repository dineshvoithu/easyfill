<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
<header>
  
  <nav class="nav">
    <div class="container">
      <h1 class="logo"><a href="/index.html">Easy<span>Fill</span></a></h1>
      <ul>
        <li><a href="#" class="current">Home</a></li>
        <li><a href="C:/Users/Dineshvoithu/OneDrive/Desktop/llifysae/aboutus.html">About</a></li>
        <li><a href="C:/Users/Dineshvoithu/OneDrive/Desktop/llifysae/contactus.html">Contact Us</a></li>
        <li><a href="">Order Now </a></li>
        <li><a href="http://localhost/llifysae/login.php">Login</a></li>
      </ul>
    </div>
  </nav>
<br>
</header>
	<a href="logout.php">Logout</a>
	
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>

<html>
<link rel="stylesheet" href="mystyle.css">
<body>
	<div class="header">
		<div style="background-image:url(symbol.jpg);background-repeat: no-repeat;background-size:180px;height:200px;">
		<h1 style="text-align: center;font-size: 60px;color:purple;padding-top: 60px">Kalanand Auditorium</h1>
		<div>
	</div>

<div class="navbar">
	<a href="logout.php">Logout
	<a href="contact.php">Contact
	<a href="schedule.php">Schedule
	<a href="gallery.php">Gallery
	<a href="history.php">History
	<a href="about.php">About 
	<a href="home.php">Home
</div>	

<div class="maincontent">

<table>
<?php

session_start();
include"dbconnection.php";
$message=" ";

$img = pg_query($con, "SELECT * FROM image");
     while ($row = pg_fetch_array($img)) {     
		
      	echo "<img src=".$row['name']." >";   
}


?>

</div>
</body>
</html>

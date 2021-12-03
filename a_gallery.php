<?php
session_start();
include"dbconnection.php";
$message=" ";
if(isset($_POST['submit_image']))
{
   $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];  
 //print_r($_POST);


$sql2="INSERT into image(name)VALUES('$filename')";

$result2=pg_query($con,$sql2);
 if($result2>0)
{
  $message="image added successfully";
}
 else
{
  $message="Error in adding image";
}


}
?>

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
	<a href="a_schedule.php">Schedule
	<a href="a_gallery.php">Gallery
	<a href="admin_home.php">Home
</div>	

<div class="maincontent">
	<div style="background-image: url('image/gallery.jpeg');background-size: 100%;height:600px;padding-top: 60px;">
		<div style="color:white ;text-align:center;font-size:50px;"><b>Upload an Image</b>
		</div>	
		
<form method="POST" action="a_gallery.php" enctype="multipart/form-data">
<table align=center bgcolor=white>
 <tr><th><input type="file" name="img"><th>
 <th><img src="image/gallery_symbol.png"></th></tr>
 <tr><th colspan=2><input type="submit" name="submit_image" value="submit"></th></tr>

</table>
</form>
</div>
</div>
</body>
</html>

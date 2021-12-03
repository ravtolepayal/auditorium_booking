<?php
session_start();
include"dbconnection.php";
$message=" ";
if(isset($_POST['save']))
{
  $cname=$_POST['name'];
  $city=$_POST['city'];
  $phone=$_POST['no'];
  $edate=$_POST['dt'];
 $start_time=$_POST['start_tm'];
 $end_time=$_POST['end_tm'];
 $discription=$_POST['desc'];

 //print_r($_POST);


$sql2="INSERT into book	(cname,city,contact,date,start_time,end_time,discription)VALUES('$cname','$city','$phone','$edate','$start_time','$end_time','$discription')";

$result2=pg_query($con,$sql2);
 if($result2>0)
{
  $message="Event details added successfully";
}
 else
{
  $message="Error in adding event";
}
}
?>
<html>
<link rel="stylesheet" href="mystyle.css">
<body>

	<div class="header">
		<div style="background-image:url(image/symbol.jpg);background-repeat: no-repeat;background-size:180px;height:200px;">
		<h1 style="text-align: center;font-size: 60px;color:purple;padding-top: 60px">Kalanand Auditorium</h1><div>
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

	<form style="padding-top: 30px">
		<table align=center bgcolor="lightblue"  cellpadding="5px" cellspacing="10px">
		<tr><th colspan=2><h1><u>Booking Form</u></h1></th>
		<tr><th><h2>Name: </h2></th>
			<th><input type=text name=nm required></th></tr>
		<tr><th><h2>City: </h2></th>  
			<th><input type=text name=city required></th></tr>
		<tr><th><h2>Phone no: </h2></th>  
			<th><input type=text name=no required></th></tr>
		<tr><th><h2>Event Date: </h2></th>  
			<th><input type=date name=dt required></th></tr>
		<tr><th><h2>Event Time: </h2></th>  
			<th><input type=text name=start_tm required>to<input type=text name=end_tm required></th></tr>
		<tr><th><h2>discription: </h2></th>  
			<th><textarea name=desc required></textarea></th></tr>	
		<tr><th> </th>
			<th style="text-align: left"><a href="book.php"><input type=button name=save value=submit></a>  <input type=button value=Reset>  </h2></th>  
			</table>
	</form>

</div>
</body>
</html>

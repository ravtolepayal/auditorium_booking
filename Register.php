<?php
session_start();
include"dbconnection.php";
$message=" ";
if(isset($_POST['reg']))
{
  $eve_name=$_POST['ename'];
  $eve_date=$_POST['edate'];
 $eve_start_time=$_POST['estart'];
 $eve_end_time=$_POST['eend'];

 //print_r($_POST);


$sql2="INSERT into book	(cust_name,event_date,event_start_time,event_end_time,event_duration)VALUES('$eve_name','$eve_date','$eve_start_time','$eve_end_time','$eve_duration')";

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
	
	</div>	

<div class="maincontent">
	<div class="main">
	<form style="padding-top: 30px">
		<table align=center bgcolor="lightblue"  cellpadding="5px" cellspacing="10px">
		<tr><th colspan=2><h1><u>Registration Form</u></h1></th>
		<tr><th><h2>Name: </h2></th>
			<th><input type=text name=nm required></th></tr>
		<tr><th><h2>City: </h2></th>  
			<th><input type=text name=add required></th></tr>
		<tr><th><h2>Phone no: </h2></th>  
			<th><input type=text name=no required></th></tr>
		<tr><th><h2>Email Id: </h2></th>  
			<th><input type=email name=id required></th></tr>	
		<tr><th><h2>User Id: </h2></th>  
			<th><input type=text name=uid required></th></tr>
		<tr><th><h2>Password: </h2></th>  
			<th><input type=text name=pswd required></th></tr>
		<tr><th> </th>
			<th style="text-align: left">
			<a href="index.php"><input type=button name=reg value=Register></a> 
			 <input type=button value=Reset>  </h2></th>  
			</table>
	</form>

	</div>
</div>
</body>
</html>

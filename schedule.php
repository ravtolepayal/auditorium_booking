<html>
<link rel="stylesheet" href="mystyle.css">
<body>

	<div class="header">
		<div style="background-image:url(image/symbol.jpg);background-repeat: no-repeat;background-size:180px;height:200px;">
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


<?php
session_start();
include"dbconnection.php";
$message=" ";
$sql2="select * from book";
$result2=pg_query($con,$sql2);
 if($result2>0)
{
 while ($row = pg_fetch_row($result)) {
                 echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                 echo "</tr>";
}
}

?>

</div>
</body>
</html>

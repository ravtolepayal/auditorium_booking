<html>
<link rel="stylesheet" href="mystyle1.css">
<body>


	<div class="header">
		<div style="background-image:url(image/symbol.jpg);background-repeat: no-repeat;background-size:180px;height:200px;">
		<h1 style="text-align: center;font-size: 60px;color:purple;padding-top: 60px">Kalanand Auditorium</h1><div>
	</div>
<div class="navbar">
		</div>	
<div class="maincontent">        

<div class="sidebar">
	<form style="padding-top: 40px" action="admin_home.php" method="post">
		<table align=center>
		<tr><th colspan=2><img src="image/admin.jpg" width="120px" height="120px"></th></tr>
		<tr><th><h2>Login Id: </h2></th>
		<th ><input type=text name=login required></th></tr>
		<tr><th><h2>Passward: </h2></th>  
		<th><input type=password name=pswd required></th></tr>
		<tr><th> </th>
			<th style="text-align: left"><input type=submit onclick="return check(this.form)" value="login"></th>  </tr>
		
		</table>
	</form>
	<script type="text/javascript">
		function check(form)
		{
			if(form.login.value=="admin" && form.pswd.value=="admin1234")
			{
				return true;
			}
			else 
			{
				alert("Invalid Admin and Password");
				return false;
			}
		}
	</script>
</div>
	<div class="main">
		<form style="padding-top: 40px" method="post">
		<table align=center>
		<tr><th colspan=2><img src="image/customer.jpeg" width="120px" height="120px"></th></tr>
		<tr><th><h2>Login Id: </h2></th>
		<th><input type=text name=login required></th></tr>
		<tr><th><h2>Passward: </h2></th>  
		<th><input type=password name=pswd required></th></tr>
		<tr><th> </th>
			<th style="text-align: left"><a href="home.php"><input type=button value=login></a> </th>  
			<tr><th></th>
		
		<th><h4 style="text-align: right;"><a href="register.php"><u>New User</u></a></h4></th></tr>

		</table>
	</form>
	
</div>

</body>
</html>

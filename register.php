<?php
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$zip=$_POST['zip'];
	include("includes/db.php");
	if($dat)
	{
	$savedata=mysql_query("insert into register values('$name','$email','$contact','$password','$gender','$address','$zip')");
	}
}
?>
<!DOCTYPE html>
<body>
<head>
<?php
	include("includes/head.php");
?>
</head>
<div id="outer">
<div id="content">
<h1 align="center" style="color:red">Welcome to Registration</h1>
<form action="register.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>Name</td>
<td><input type="text" name="name" required/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" required/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contact" required/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" required/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" required></textarea></td>
</tr>
<tr>
<td>Zip Code</td>
<td><input type="text" name="zip" required/></td>
</tr>
<tr>
<td><input type="submit" value="Submit" name="Submit"/></td>
<td><a href="login.php">Login</a></td>
</tr>
</table>
</form>
</div>
</body>
</div>
</html>

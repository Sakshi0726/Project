<?php
if(isset($_POST['Submit']))
{
	$name1=$_POST['name1'];
	$email1=$_POST['email1'];
	$contact1=$_POST['contact1'];
	$password1=$_POST['password1'];
	$gender1=$_POST['gender1'];
	$address1=$_POST['address1'];
	$zip1=$_POST['zip1'];
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="job";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
	if($dat)
	{
	$savedata=mysql_query("insert into uregister values('$name1','$email1','$contact1','$password1','$gender1','$address1','$zip1')");
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
<h1 align="center" style="color:red">Welcome to User Registration</h1>
<form action="uregister.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>Name</td>
<td><input type="text" name="name1" required/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email1" required/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contact1" required/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password1" required/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender1" value="Male">Male
<input type="radio" name="gender1" value="Female">Female</td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address1" required></textarea></td>
</tr>
<tr>
<td>Zip Code</td>
<td><input type="text" name="zip1" required/></td>
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

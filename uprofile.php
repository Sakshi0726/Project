<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
$uname=$_SESSION['uname'];
if(isset($_POST['Submit']))
{
	$name3=$_POST['name3'];
	$email3=$_POST['email3'];
	$contact3=$_POST['contact3'];
	$gender3=$_POST['gender3'];
	$address3=$_POST['address3'];
	$zip3=$_POST['zip3'];
	$qual3=$_POST['qual3'];
	$exp3=$_POST['exp3'];
	$area3=$_POST['area3'];
	$key3=$_POST['key3'];
	include("includes/db.php");
	if($dat)
	{
	$savedata=mysql_query("insert into profile values('$name3','$email3','$contact3','$gender3','$address3','$zip3','$qual3','$exp3','$area3','$key3','$uname')");
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
	<div id="header">
		<div id="menu1">
<?php 
include("includes/menu1.php");
?>
</div>
</div>
<div id="content">
<h1 align="center" style="color:red">Profile</h1>
<form action="profile.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>Name</td>
<td><input type="text" name="name3" required/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email3" required/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contact3" required/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender3" value="Male">Male
<input type="radio" name="gender3" value="Female">Female</td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address3" required></textarea></td>
</tr>
<tr>
<td>Zip Code</td>
<td><input type="text" name="zip3" required/></td>
</tr>
<tr>
<td>Enter Qualifications</td>
<td><select name="qual3">
<option>B.Tech.</option>				
<option>B.C.A</option>
<option>M.C.A</option>
<option>M.Tech.</option>
</select></td>
</tr>
<tr>
<td>Enter Experience</td>
<td><select name="exp3">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
</select></td>
</tr>
<tr>
<td>Enter Expertise Area</td>
<td><input type="text" name="area3" required/></td>
</tr>
<tr>
<td>Enter Key Skills</td>
<td><input type="text" name="key3" required/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="Submit" name="Submit"/></td>
</tr>
</table>
</form>
</div>
</body>
</div>
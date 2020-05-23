<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
	include("includes/db.php");
	if($dat)
	{
	$sql="select * from profile";
	$res=mysql_query($sql);
	if($res)
	$row=mysql_fetch_array($res);
	$name3=$row['name3'];
	$email3=$row['email3'];
	$contact3=$row['contact3'];
	$gender3=$row['gender3'];
	$address3=$row['address3'];
	$zip3=$row['zip3'];
	$qual3=$row['qual3'];
	$exp3=$row['exp3'];
	$area3=$row['area3'];
	$key3=$row['key3'];
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
<h1 align="center" style="color:red">User Profile</h1>
<form action="profile.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>Name</td>
<td><input type="text" name="name3" value="<?php echo $row['name3'];?>" required/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email3" value="<?php echo $row['email3'];?>"required/></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contact3" value="<?php echo $row['contact3'];?>"required/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="gender3" value="<?php echo $row['gender3'];?>"required/></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address3" value="<?php echo $row['address3'];?>"required/></td>
</tr>
<tr>
<td>Zip Code</td>
<td><input type="text" name="zip3" value="<?php echo $row['zip3'];?>" required/></td>
</tr>
<tr>
<td>Enter Qualifications</td>
<td><input type="text" name="qual3" value="<?php echo $row['qual3'];?>" required/></td>
</tr>
<tr>
<td>Enter Experience</td>
<td><input type="text" name="exp3" value="<?php echo $row['exp3'];?>" required/></td>
</tr>
<tr>
<td>Enter Expertise Area</td>
<td><input type="text" name="area3" value="<?php echo $row['area3'];?>" required/></td>
</tr>
<tr>
<td>Enter Key Skills</td>
<td><input type="text" name="key3" value="<?php echo $row['key3'];?>" required/></td>
</tr>
<tr>
<td><a href="uprofile.php"><input type="button" value="Add"/></a></td>
</tr>
</table>
</form>
</div>
</body>
</div>
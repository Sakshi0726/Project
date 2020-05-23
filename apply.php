<?php
session_start();
if(isset($_POST['Submit']))
{
	$id2=$_POST['id2'];
	$name2=$_POST['name2'];
	$contact2=$_POST['contact2'];
	$gender2=$_POST['gender2'];
	$address2=$_POST['address2'];
	$qual2=$_POST['qual2'];
	$exp2=$_POST['exp2'];
	$tenth=$_POST['tenth'];
	$twelve=$_POST['twelve'];
	$grad=$_POST['grad'];
	include("includes/db.php");
	if($dat)
	{
		$savedata=mysql_query("insert into apply values('$id2','$name2','$contact2','$gender2','$address2','$qual2','$exp2','$tenth','$twelve','$grad')");
	}
}
?>
<!DOCTYPE html>
<body>
<head>
<?php
	include("includes/head.php");
?>
</head><div id="outer">
	<div id="header">
		<div id="menu1">
<?php 
include("includes/menu1.php");
?>
</div>
</div>
<div id="content">
<h1 align="center" style="color:red">Apply</h1>
<form action="apply.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td><input type="text" name="id2" placeholder="Enter Job Id" required/></td>
</tr>
<tr>
<td><input type="text" name="name2" placeholder="Enter Your Name" value="<?php echo $_SESSION['uname'];?>" required/></td>
</tr>
<tr>
<td><input type="text" name="contact2" placeholder="Enter Your Contact" required/></td>
</tr>
<tr>
<td><input type="radio" name="gender2" value="Male">Male
<input type="radio" name="gender2" value="Female">Female</td>
</tr>
<tr>
<td><textarea name="address2" placeholder="Enter Your Address" required></textarea></td>
</tr>
<tr>
<td><select name="qual2" placeholder="Enter Your Qualifications">
<option>B.Tech.</option>				
<option>B.C.A</option>
<option>M.C.A</option>
<option>M.Tech.</option>
</select></td>
</tr>
<tr>
<td><select name="exp2" placeholder="Enter Your Experience">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
</select></td>
</tr>
<tr>
<td><input type="text" name="tenth" placeholder="Enter 10th Percentage" required/></td>
</tr>
<tr>
<td><input type="text" name="twelve" placeholder="Enter 12th Percentage" required/></td>
</tr>
<tr>
<td><input type="text" name="grad" placeholder="Enter Graduation Percentage" required/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="Apply" name="Submit"/></td>
</tr>
</table>
</form>
</div>
</div>
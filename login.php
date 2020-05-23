<?php
session_start();
if(!isset($_SESSION['uname'])){
if(isset($_POST['username'])){
$uname=$_POST['username'];
$_SESSION['uname']=$uname;
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$choice=$_POST['choice'];
	include("includes/db.php");
	if($dat)
	{
		$sql="select * from register";
		$res=mysql_query($sql);
		if($res){
			$row=mysql_fetch_array($res);
			if($_POST['password']==$row['password']){
				if($choice=="Admin"){
					header("location:home_admin.php");
				}
			}
		}
		
	$s="select * from uregister";
	$r=mysql_query($s);
	if($r){
		$row1=mysql_fetch_array($r);
		if($_POST['password']==$row1['password1']){
			if($choice=="User"){
				header("location:home_user.php");
			}
		}
	}
}
}
}
} else{
	echo "<script>location.href='home_user.php'</script>";
}
?>
<!DOCTYPE html>
<head>
<?php
	include("includes/head.php");
?>
</head>
<body>
<div id="outer">
<div id="content">
<h1 align="center" style="color:blue">Welcome to Login</h1>
<form action="" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>User Name:</td>
<td><input type="text" name="username" placeholder="Enter Your User Name" required/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Enter Your Password" required/></td>
</tr>
<tr>
<td>Login As:</td>
<td><select name="choice">
<option>Admin</option>
<option>User</option>
</select></td>
</tr>
<tr>
<td><input type="submit" name="login" value="Login"/></td>
<td><a href="uregister.php">Register</a></td>
</tr>
</table>
</form>
</div>
</div>
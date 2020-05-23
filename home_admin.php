<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<head>
<?php 
include("includes/head.php");
?>
</head>
<div id="outer">
	<div id="header">
		<div id="menu">
<?php 
include("includes/menu.php");
?>
</div>
</div>
<div id="content">
<a href="register_admin.php">Register</a>
<a href="login.php">Login</a><br/><br/><br/>
<h2 align="center">Welcome to <span style="color:red">JobFinder</span> an online portal for searching IT Jobs.<br/><br/>
We have many offers for you on which you can apply.</h2>
</div>
</div>
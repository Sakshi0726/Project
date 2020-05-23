<!DOCTYPE html>
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
<?php
session_start();
if(isset($_SESSION['uname'])){
echo "<h1>Welcome:".$_SESSION['uname']."</h1>";
} else{
	echo "<script>location.href='login.php'</script>";
}
?>
<a href="register.php">Register</a>
<a href="login.php">Login</a>
<center><div id="share" style="width:400px;height:40px;padding:5px;border:1px solid white;margin-top:20px;">
<img style="padding:10px;" src="images/001_45.png"/><a href="share.php" style="float:left;padding:10px">Share Your Post or Thoughts</a>
</div><br/><br/></center>
<?php
	include("includes/db.php");
	if($dat)
	{
	$sql="select * from type";
	$res=mysql_query($sql);
	if($res)
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			echo "<table align='center' style='font-size:18px'><tr><td>".$row['type']."<br/><br/></td></tr></table>";
	}
	
?>

</div>

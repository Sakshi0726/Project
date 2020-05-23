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
<h1 align="center" style="color:red">Applied Person</h1>
<?php
	include("includes/db.php");
	if($dat)
	{
	$sql="select * from apply";
	$res=mysql_query($sql);
	if($res)
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			echo "<table align='center' style='font-size:18px'><tr><th>ID</th><th>Name</th><th>Contact</th><th>Gender</th><th>Address</th><th>Qualification</th><th>Experience</th><th>10th%</th><th>12th%</th><th>Graduation%</th></tr><tr><td>".$row['id2']."</td><td>".$row['name2']."</td><td>".$row['contact2']."</td><td>".$row['gender2']."</td><td>".$row['address2']."</td><td align='center'>".$row['qual2']."</td><td align='center'>".$row['exp2']."</td><td>".$row['tenth']."</td><td>".$row['twelve']."</td><td align='center'>".$row['grad']."</td></tr></table>";
	}
	
?>
</div>
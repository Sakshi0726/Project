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
<h1 align="center" style="color:red">Feedback by Users</h1>
</html>
<?php
	include("includes/db.php");
	if($dat)
	{
	$sql="select * from feedback";
	$res=mysql_query($sql);
	if($res)
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			echo "<table align='center' border='1px' style='font-size:18px'><tr><th>Name</th><th>Feedback</th></tr><tr><td>".$row['name']."</td><td>".$row['feed']."</td></tr></table>";
	}
	
?>
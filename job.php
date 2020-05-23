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
		<div id="menu1">
<?php 
include("includes/menu1.php");
?>
</div>
</div>
<h1 align="center" style="color:red">Newly Posted Jobs</h1>
</html>
<?php
	include("includes/db.php");
	if($dat)
	{
	$sql="select * from post ORDER BY `post`.`title` DESC";
	$res=mysql_query($sql);
	if($res)
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			echo "<table style='font-size:18px'><tr><th>ID</th><th>Job Title</th><th>Name</th><th>Location</th><th>Requirements</th><th>Experience</th><th>Date</th><th>Time</th></tr><tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['com_name']."</td><td>".$row['location']."</td><td>".$row['require']."</td><td>".$row['expe']."</td><td>".$row['idate']."</td><td>".$row['itime']."</td><td><a href='apply.php'><input type='submit' value='Apply' style='background: blue;font-size: 15px;width:100px;color: white;border-radius:20px'></a></td></tr><br/><br/></table>";
	}
	
?>
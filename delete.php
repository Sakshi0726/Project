<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Delete']))
{
	$id=$_POST['id'];
	include("includes/db.php");
	if($dat)
		$sql="delete from post where id='$id'";
		$res=mysql_query($sql);
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
<body>
<div id="content">
<h1 align="center" style="color:red">Delete Vacancy</h1>
<form action="delete.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>ID</td>
<td><input type="text" name="id"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Delete" name="Delete"></td>
</tr>
</div>
</div>
</table>
</form>
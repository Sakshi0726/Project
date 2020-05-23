<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$title=$_POST['title'];
	$com_name=$_POST['com_name'];
	$location=$_POST['location'];
	$require=$_POST['require'];
	$expe=$_POST['expe'];
	$idate=$_POST['idate'];
	$itime=$_POST['itime'];
	include("includes/db.php");
	if($dat)
	{
		$savedata=mysql_query("insert into post values('$id','$title','$com_name','$location','$require','$expe','$idate','$itime')");
	}
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
<form action="post.php" method="POST">
<table align="center" cellspacing="10px" cellpadding="10px">
<tr>
<td>ID</td>
<td><input type="text" name="id" required/></td>
</tr>
<tr>
<td>Title</td>
<td><input type="text" name="title" required/></td>
</tr>
<tr>
<td>Company Name</td>
<td><input type="text" name="com_name" required/></td>
</tr>
<tr>
<td>Location</td>
<td><input type="text" name="location" required/></td>
</tr>
<tr>
<td>Requirements</td>
<td><textarea name="require" required/></textarea></td>
</tr>
<tr>
<td>Experience</td>
<td><input type="text" name="expe" required/></td>
</tr>
<tr>
<td>Interview Date</td>
<td><input type="date" name="idate" required/></td>
</tr>
<tr>
<td>Interview Time</td>
<td><input type="text" name="itime" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="Submit" value="Post"></td>
</tr>
</form>
</table>
</div>
</div>
</body>
</html>
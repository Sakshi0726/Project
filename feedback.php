<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$feed=$_POST['feed'];
	include("includes/db.php");
	if($dat)
	{
		$savedata=mysql_query("insert into feedback values('$name','$feed')");
	}
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
	<div id="header">
		<div id="menu1">
			<?php
				include("includes/menu1.php");
			?>
		</div>                                  
	</div>
<div id="content">
<h1 align="center" style="color:red">Give your Feedback</h1>
<form action="feedback.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $_SESSION['uname'];?>"/></td>
</tr>
<tr>
<td>Feedback</td>
<td><textarea name="feed" rows="10"></textarea></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="Submit" value="Post"/></td>
</tr>
</table>
</form>
</div>
</div>
</body>
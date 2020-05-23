<?php
if(isset($_POST['Submit']))
{
	$type=$_POST['type'];
	include("includes/db.php");
	if($dat)
	{
		$savedata=mysql_query("insert into type values('$type')");
		header("location:home_user.php");
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
<form action="share.php" method="POST">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr>
<td><textarea name="type" rows="4" style="width:300px" placeholder="Type Something...."></textarea></td>
</tr>
<tr>
<td align="center"><input type="submit" name="Submit" value="Post"></td>
</tr>
</table>
</form>
</div>
</div>
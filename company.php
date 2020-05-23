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
<h1 align="center" style="color:red">Companies</h1>
<div id="content" style="height:390px;">
<div class="left">
<div class="one">Google</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">TCS</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">IBM</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">Accenture</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">Wipro</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">Infosys</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">HCL</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">HP</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">Capegimi</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

<div class="left">
<div class="one">Cognizant</div>
<div class="second">
<a href="uregister.php"><input type="submit" value="Register"/></a></div>
</div>

</div>
</div>
</html>
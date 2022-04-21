<?php
session_start();
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
include("configAL.php");
if(!empty($_POST))
{
	if($_POST['email']=="kavyagarg@gmail.com" && $_POST['password']=="kavya")
	{
		$_SESSION['admin'] = $_POST['email'];
		header('location:admin.php');
	}
	$email = mysqli_real_escape_string($al,$_POST['email']);
	$pass = mysqli_real_escape_string($al,sha1($_POST['password']));
	$sql = mysqli_query($al,"SELECT * FROM rb_users WHERE email = '$email' AND password = '$pass'");
	if(mysqli_fetch_array($sql)!=0)
	{
		$_SESSION['email'] = $email;
		header("location:home.php");
	}
	else
	{
		?><script type="text/javascript">alert("Wrong Email or Password");</script>
        <?php } 
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant &amp; Bill Management</title>
<link type="text/css" href="css.css" rel="stylesheet" />
</head>
<body>
<div id="header" align="center">
<span class="head">Restaurant Bill Management</span>
</div>
<br>
<br>
<br>
<br>
<br>

<div align="center">
<div id="boxy">
<span class="Shead">Customer/Admin Login</span>
<br>
<br>
<form method="post" action="">
<input type="email" name="email" required size="30" placeholder="Enter Email" />
<br>
<br>
<input type="password" name="password" required size="30" placeholder="Enter Password" />
<br>
<br>
<input type="submit" value="Login" />&nbsp;&nbsp;<input type="button" value="Signup" onClick="window.location='register.php';" />
</form>
</div>
</div>
</body>
</html>
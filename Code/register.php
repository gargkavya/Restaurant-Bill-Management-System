<?php
include("configAL.php");
if(!empty($_POST))
{
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$name = $_POST['name'];
	$sql = mysqli_query($al,"INSERT INTO rb_users(name,password,email) VALUES('$name','$pass','$email')");
	if($sql)
	{
		?>
        <script type="text/javascript">
		alert("Successfully Registrered");
		</script>
        <?php
	}else{
?>
        <script type="text/javascript">
		alert("Email Already Registered");
		</script>
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
<span class="Shead">Register New User</span>
<br>
<br>
<form method="post" action="">
<input type="text" name="name" required size="30" placeholder="Enter Full Name" />
<br>
<br>
<input type="email" name="email" required size="30" placeholder="Enter Email" />
<br>
<br>
<input type="password" name="password" required size="30" placeholder="Enter Password" />
<br>
<br>
<input type="submit" value="Signup"/>&nbsp;&nbsp;<input type="button" value="Login Page" onClick="window.location='index.php';" />
</form>
</div>
</div>
</body>
</html>
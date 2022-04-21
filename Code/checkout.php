<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
include("configAL.php");
$email = $_SESSION['email'];
$x = mysqli_query($al,"SELECT * FROM rb_users WHERE email = '$email'");
$y = mysqli_fetch_array($x);

$sql = mysqli_query($al,"SELECT * FROM rb_cart WHERE email = '$email'");
while($v = mysqli_fetch_array($sql))
{
	$n = $v['name'];
	$e = $v['email'];
	$q = $v['quantity'];
	$t = $v['total'];
	mysqli_query($al,"INSERT INTO rb_checkout(name,email,quantity,total) VALUES('$n','$e','$q','$t')");
}
mysqli_query($al,"DELETE FROM rb_cart WHERE email='$email'");
$_SESSION['cart'] = 0;
header("location:exit.php");
?>
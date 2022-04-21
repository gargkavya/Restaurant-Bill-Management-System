<?php
include("configAL.php");
if(!empty($_POST))
{
	$c = $_POST['emm'];
	mysqli_query($al,"DELETE FROM rb_checkout WHERE email='$c'");
	header('location:admin.php');
}
?>
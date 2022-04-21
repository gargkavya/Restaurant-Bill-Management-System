<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location:index.php");
}
include("configAL.php");
$email = $_SESSION['email'];
$x = mysqli_query($al,"SELECT * FROM rb_users WHERE email = '$email'");
$y = mysqli_fetch_array($x);
$name = $y['name'];

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
<br>
<span class="Shead">Welcome Admin</span>
</div>
<br>
<br>

<br>
<br>
<br>

<div align="center">
<div id="boxy">
<span class="Shead">Orders</span>
<form method="post" action="">
<select name="order">
<option value="0" disabled selected> - - Select Name/Email - - </option>
<?php
$z = mysqli_query($al,"SELECT DISTINCT email FROM rb_checkout");
while ($zz = mysqli_fetch_array($z))
{
		$em = $zz['email'];
		$r = mysqli_query($al,"SELECT * FROM rb_users WHERE email ='$em'");
		$rr = mysqli_fetch_array($r);
	?>
<option value="<?php echo $zz['email'];?>"><?php echo $rr['name']."/".$zz['email'];?></option>
<?php } ?>
</select>
<br><br>
<input type="hidden" name="uname" value="<?php echo $rr['name'];?>">
<input type="submit" name="id" value="VIEW" >
</form>
<br>
<br>
<?php
$order_mail = $_POST['order'];
if($_POST['id']=="VIEW")
{
	?>
    
<table border="0" class="table">
<tr style="color:rgba(255,126,0,1.00);"><td>Items</td><td>Quantity</td><td>Amount</td></tr>
<?php 
	$total = 0;
	$o = mysqli_query($al,"SELECT * FROM rb_checkout WHERE email = '$order_mail'");
	while($oo = mysqli_fetch_array($o))
	{
	  $total = $total + $oo['total'];
		?>
        <tr>
        	<td><?php echo $oo['name'];?></td>
            <td><?php echo $oo['quantity'];?></td>
            <td><?php echo $oo['total'];?></td>
        </tr>
     <?php } ?>
     <tr style="color:rgba(255,229,0,1.00);"><td align="center" colspan="3">User : <?php echo $_POST['uname'];?></td></tr>
     <tr style="color:rgba(255,229,0,1.00);"><td align="center" colspan="3">Total Bill : Rs.<?php echo $total;?> /-</td></tr>
		<tr style="color:rgba(255,229,0,1.00);"><td align="center" colspan="3"><form method="post" action="finish.php"><input type="hidden" name="emm" value="<?php echo $order_mail;?>"><input type="submit" value="FINISH" onClick="return confirm('Are You Sure..?');"></form></td></tr>
   </table>  
   
   <?php } ?>  
   <br>
<br>
<input type="button" onClick="window.location='exit.php'" name="id" value="EXIT" >       
</div>
</div>
</body>
</html>
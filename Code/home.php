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
$name = $y['name'];
if(!empty($_POST))
{
	$quantity = $_POST['q'];
	$food_id = $_POST['food'];
	
	$a = mysqli_query($al,"SELECT * FROM rb_food WHERE id = '$food_id'");
	$b = mysqli_fetch_array($a);
	$food_name = $b['name'];
	$rate = $b['rate'];
	$amount = $rate * $quantity;
	$_SESSION['cart'] = $_SESSION['cart'] + 1;
	$sql = mysqli_query($al,"INSERT INTO rb_cart(name,email,quantity,total) VALUES('$food_name','$email','$quantity','$amount')");
	if($sql)
	{
		?>
        <script type="text/javascript">
		alert("Successfully Added to Cart");
		</script>
        <?php
	}
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
<br>
<span class="Shead">Welcome <?php echo $name;?></span>
</div>
<br>
<br>

<br>
<br>
<br>

<div align="center">
<span style="font-family:'Trebuchet MS';color:rgba(255,255,255,1.00);background-color:rgba(0,0,0,0.6);font-size:18px;padding:20px;text-align:center;border-radius:250px;">Cart : <?php echo $_SESSION['cart'];?></span>
<br>
<br>
<br>
<table align="center" style="background-color:rgba(0,0,0,0.5);">
<tr>
<td align="center"><img src="images/aloo pakora-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/Cheese pakoraq-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/chinese fried rice-01-01.png" height="350" width="350"></td>
</tr>
<tr>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="1">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="2">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="3">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
</tr>
<tr>
<td align="center"><img src="images/palak pulao-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/paneer pakora-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/roti-01-01.png" height="350" width="350"></td>
</tr>
<tr>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="4">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="5">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="6">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
</tr>
<tr>
<td align="center"><img src="images/veg crispy-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/tandoori roti-01-01.png" height="350" width="350"></td>
<td align="center"><img src="images/veg fried rice1-01-01.png" height="350" width="350"></td>
</tr>
<tr>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="7">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="8">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
<td align="center"><form method="post" action=""><input type="number" size="5" name="q" placeholder="Quantity"><input type="hidden" name="food" value="9">&nbsp;&nbsp;<input type="submit" value="Add To Cart"></form></td>
</tr>
<tr><td align="center" colspan="3"><input type="button" value="CHECKOUT" onClick="window.location='checkout.php'"></td></tr>
</table>
<br>
<br>
<br>
<br>
<br>

</div>
</body>
</html>
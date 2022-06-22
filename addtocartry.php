<?php

session_start();
include 'custdashboardh.php';
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart1"])) {
	foreach($_SESSION["shopping_cart1"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart1"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart1"]))
		unset($_SESSION["shopping_cart1"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart1"] as $value){
    if($value['code'] === $_POST["code"]){
    		echo "yes am here".$value['code'];
    				echo "yes am".$_POST["code"];
        $value['quantity'] = $_POST["quantity"];
        echo "   yes quantity".$value['quantity'];
        echo "  yes am quantity".$_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>

<link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />

<div style="width:700px; margin:50 auto;">

  

<?php
if(!empty($_SESSION["shopping_cart1"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart1"]));
echo "count".$cart_count;
?>
<div class="cart_div">
<a href="cartnew.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart1"])){
    $total_price=0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart1"] as $product1){
	echo "$".$product1['code'] ;
	 if($product1)
				echo "yes";
			else
				echo "No";
?>
<tr>
<td><img src='<?php echo $product1["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product1["name"];?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product1["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product1["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product1["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product1["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product1["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product1["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo $a=$product1["price"]; ?></td>
<td><?php $b=$_POST["quantity"];
echo ($a*$b);  ?></td>
</tr>
<?php
$total_price += ($a*$b);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>



</div>
		<?php
		include 'custdashboard.php';
		?>
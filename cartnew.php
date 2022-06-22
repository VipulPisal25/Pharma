<?php

session_start();
include 'custdashboardh.php';
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart1"])) {
	echo "Exequte";
	foreach($_SESSION["shopping_cart1"] as $key => $value) {
		if($_POST["code"] == $key){
			echo "Exequte1".$_POST["code"];
		unset($_SESSION["shopping_cart1"][$key]);
		echo "Exequte3";
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


<link rel="stylesheet" href="fonts/icomoon/style.css">

  

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
<div class="site-section">
<div class="container">
<div class="row mb-5">
<form class="col-md-12" method="post">
<div class=="site-blocks-table">
<table class="table table-bordered">
<tbody>
<thead>
<tr>
<td class="product-thumbnail">ITEMS</td>
<td class="product-name">ITEM NAME</td>
<td class="product-price">QUANTITY</td>
<td class="product-price">>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>
</thead>	
<?php		
foreach ($_SESSION["shopping_cart1"] as $product1){
	$item_price = $product1["quantity"]*$product1["price"];

	
?>
<tr>
<td  class="product-thumbnail"><img src='<?php echo $product1["image"]; ?>'  alt="Image" class="img-fluid" /></td>
<td class="product-name"><h2 class="h5 text-black"><?php echo $product1["code"]; ?></h2><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product1["code"];?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td class="product-price">
<?php echo $product1['quantity'];
//echo ($a*$b);  ?>
<!--
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product1["code"]; ?>" />
<input type='hidden' name='action' value="change" />

<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php //if($product1["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php //if($product1["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php //if($product1["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php //if($product1["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php //if($product1["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>-->
</td>
<td><?php echo $a=$product1["price"]; ?></td>
<td><?php echo "$ ". number_format($item_price,2);
//echo $product1['code'];
//echo ($a*$b);  ?></td>
</tr>
<?php

				$total_quantity += $product1["quantity"];
				echo $total_price += ($product1["price"]*$product1["quantity"]);


}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
</div>	
</div>
</div>
</form>
</div>	
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


              <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
              </div>
              <div class="col-md-6">
			  <form name="1" action="shopnew.php">
                <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button>
              </div>
            </div>
			</div>
			</div>
		<?php
		include 'custdashboard.php';
		?>
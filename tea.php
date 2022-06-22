<?php

session_start();
include 'custdashboardh.php';
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");


$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code=$_POST['code'];
echo "name in post=".$code;
$result = mysqli_query($conn,"select * from add_product where categary=''");
if(mysqli_query($conn,"select * from add_product where name='$categary'"))
{echo "  ;;;;;;;;connect";}
else{ echo "not connect";}
echo "select * from add_product where categary=''";
$row = mysqli_fetch_assoc($result);
//$name = $row['name'];
$code = $row['name'];
//echo "Access".$code;
//echo $row['name'];
$price =$row['mrp'];
//echo "  price   ".$row['mrp'];
$image = $row['image'];
$q=$_POST['quantity'];
//echo "price is".$q;
$cartArray = array(
	$code=>array(
	'code'=>$code,
	'price'=>$price,
	'quantity'=>$_POST['quantity'],
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart1"])) {
	$_SESSION["shopping_cart1"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart1"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart1"] = array_merge($_SESSION["shopping_cart1"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
	
}
?>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />


  <?php
if(!empty($_SESSION["shopping_cart1"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart1"]));
?>
<div class="cart_div">
<a href="cartnew.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
  
}
		$res=mysqli_query($conn,"select * from add_product where categary=''");
		while($row=mysqli_fetch_array($res))
		{
		?>
		<!--<<div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
            <span class="tag">Sale</span>
			<div style="width:700px; margin:50 auto;">--> 
			<div class='product_wrapper'>
			  <form method='post' action=''>
			<input type='hidden' name='code' value="<?php echo $row["name"];?>" />
			<input type='hidden' name='categary' value="<?php echo $row["categary"];?>" />
            <a href="shop-single.html"> <img src="<?php echo $row["image"]?>" alt="Image" width="200px" height="200px"></a>
            <h3 class="text-dark"><a href="shop-single.html"><?php echo $row["name"];?></a></h3>
            <p class="price"> &mdash; $<?php echo $row["mrp"];?></p>
			<p class="price"> &mdash; MF Date <?php echo $row["mfg"];?></p>
			
			<p class="price"> &mdash; Exp Date <?php echo $row["exp"];?></p>
			<p>
            <input type='text' name='quantity' value="" /></p>
			<button type='submit' class="btn btn-primary px-5 py-3" >Buy Now</button>
			<!--<p>
                <a href="cartnew.php" class="btn btn-primary px-5 py-3">Buy Now</a>
              </p>-->
			<p> <?php echo $row["descripsion"]; ?> </p>
          </form>
		  </div>
		  



		<?php
		
		}
		?>
	<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


		<?php
		include 'custdashboard.php';
		?>
	
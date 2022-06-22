<?php
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");
$sql = "select * from add_product";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($result);
$id=$_GET['id'];
//$id=$r['id'];
//echo "id,$id";
$sql = "select * from add_product WHERE id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
//echo "$row";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="membernew.php">Member</a></li>                   
                  
                </li>
                <li><a href="productnew.php">Product</a></li>
                <li><a href="addproduct1.php">Add-Product</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
		   <a href="custprofileedit.php" ><span class="icon-user margin-left"> Profile  </span></a>
            <a href="pharmacyloginpage.php" ><span class="icon-lock">   Log-out</span></a>
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
	

    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <div id="wrapper">
				<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								
								<p class="lead">UPDATE Products</p>
							</div>
							<form class="form-auth-large" action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="<?php echo $row['name']; ?>" required="">
								</div>
								<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Company</label>
									<input type="text" class="form-control" name="Company" id="fullname" placeholder="Company" value="<?php  echo $row['company']; ?>"required="">
								</div>
								<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Categary</label>
									<input type="text" class="form-control" name="Categary" id="Categary" placeholder="Categary" value="<?php  echo $row['categary']; ?>"required="">
								</div>
								<div class="form-group">
									<label for="signin-mfg" class="control-label sr-only">Mfg Date</label>
									<input type="date" class="form-control" name="mfg" id="mfg" placeholder="Mfg Date" value="<?php  echo $row['mfg']; ?>"required="">
								</div>
								<div class="form-group">
									<label for="signin-exp" class="control-label sr-only">Exp date</label>
									<input type="date" class="form-control" id="exp" name="exp" placeholder="Exp date" value="<?php  echo $row['exp']; ?>"required="Enter Exp Date">
								</div>

								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">M.R.P.Rs</label>
									<input type="text" class="form-control" id="mrp" name="mrp" placeholder="M.R.P.Rs" value="<?php  echo $row['mrp']; ?>"required="" pattern="[0-9]+" >
								</div>
								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">Quantity</label>
									<input type="text" class="form-control" id="mrp" name="qty" placeholder="Quantity" value="<?php  echo $row['quantity']; ?>"required="" pattern="[0-9]+" >
								</div>
								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">Descripsion</label>
									<input type="text" name="des" class="form-control" id="mrp" placeholder="Descripsion" value="<?php  echo $row['descripsion']; ?>" required="" >
								</div>
								
								<div class="form-group">
									<label for="signin-image" class="control-label sr-only">Image</label>
									<input type="file" class="form-control" id="file" name="img1" placeholder="M.R.P.Rs" value=<?php  echo $row['image']; ?>"required="">
								</div>
								
							<!--	<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block"  name="add" >UPDATE</button>
							<!--<div class="bottom"> 
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="adminnew.php"> </a></span>
								</div> -->
							</form>
						</div>
					</div></div></div></div></div></div></div></div></div></div>
	
	<?php

if(isset($_POST['add']))
{
$conn=mysqli_connect("localhost","root","","majorpharma");
$Id=$_GET['id'];
	
	$name=$_POST['fullname'];
					  $Company=$_POST['Company'];
					  $Categary=$_POST['Categary'];
					  $mfg=$_POST['mfg'];
					  $exp=$_POST['exp'];
					  $mrp=$_POST['mrp'];
					  $qty=$_POST['quantity'];
					  $des=$_POST['des'];
					 // $img=$_POST['img1'];

	$filename=$_FILES["img1"]["name"];
$tempname=$_FILES["img1"]["tmp_name"];
$folder="Img_collection/".$filename;
	
$sql1 = "UPDATE  add_product SET name='$name',company='$Company',categary='$Categary',mfg='$mfg',exp='$exp',mrp='$mrp',quantity='$qty',descripsion='$des',image='$folder' WHERE id='$Id'";
$result1=mysqli_query($conn,$sql1);


if($result1 == true)
{
	 echo "<script>alert('Record updated successfully');window.location.href='adminnew.php';</script>";
 	
}
else{
echo "<script>alert('Record not updated successfully');window.location.href='editmember.php';</script>";
	 
}

}
  
  
  
  

?>

    <br><br><br><br>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Government Polytechnic Ahmednager, Maharashtra</li>
                <li class="phone"><a href="tel://23923929210">+91 6543653478</a></li>
                <li class="email">tycogp@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
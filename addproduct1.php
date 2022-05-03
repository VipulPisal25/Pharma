<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Please Login Here</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<style>
	.auth-box{
		height:650px;
	}
	</style>
	
	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark3.png" alt="Klorofil Logo"></div>
								<p class="lead">Add Products</p>
							</div>
							<form class="form-auth-large" action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required="">
								</div>
								<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Company</label>
									<input type="text" class="form-control" name="Company" id="fullname" placeholder="Company" required="">
								</div>
								<div class="form-group">
									<label for="signin-name" class="control-label sr-only">Categary</label>
									<input type="text" class="form-control" name="Categary" id="Categary" placeholder="Categary" required="">
								</div>
								<div class="form-group">
									<label for="signin-mfg" class="control-label sr-only">Mfg Date</label>
									<input type="date" class="form-control" name="mfg" id="mfg" placeholder="Mfg Date" required="">
								</div>
								<div class="form-group">
									<label for="signin-exp" class="control-label sr-only">Exp date</label>
									<input type="date" class="form-control" id="exp" name="exp" placeholder="Exp date" required="Enter Exp Date">
								</div>

								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">M.R.P.Rs</label>
									<input type="text" class="form-control" id="mrp" name="mrp" placeholder="M.R.P.Rs" required="" pattern="[0-9]+" >
								</div>
								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">Quantity</label>
									<input type="text" class="form-control" id="mrp" name="qty" placeholder="Quantity" required="" pattern="[0-9]+" >
								</div>
								<div class="form-group">
									<label for="signin-mrp" class="control-label sr-only">Descripsion</label>
									<textarea name="des" class="form-control" id="mrp" name="des" placeholder="Descripsion" required="" ></textarea>
								</div>
								
								<div class="form-group">
									<label for="signin-image" class="control-label sr-only">Image</label>
									<input type="file" class="form-control" id="file" name="img1" placeholder="M.R.P.Rs" required="">
								</div>
								
							<!--	<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="add" >ADD</button>
							<!--	<div class="bottom"> 
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="index.php"> </a></span>
								</div> -->
							</form>
						</div>
					</div>
					<?php
					error_reporting(E_PARSE | E_ERROR);
					if(isset($_POST['add']))
					{		
					  $name=$_POST['fullname'];
					  $Company=$_POST['Company'];
					  $Categary=$_POST['Categary'];
					  $mfg=$_POST['mfg'];
					  $exp=$_POST['exp'];
					  $mrp=$_POST['mrp'];
					  $qty=$_POST['qty'];
					  $des=$_POST['des'];
					  
$filename=$_FILES["img1"]["name"];
$tempname=$_FILES["img1"]["tmp_name"];
$folder="Img_collection/".$filename;
//temperary file madhun Img_collection ya file madhe img move_uploaded_file
move_uploaded_file($tempname,$folder);
// src mdhe img cha path
//echo "<img src='$folder' height='100' width='100' align='right'/></img>";
      $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"majorpharma");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$duplicate_user_query="select name from add_product where name='$name'";
    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        ?>
        <script>
            window.alert("Product already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=addproduct1.php" />
        <?php
    }else{

 $sql="insert into add_product values('','$name','$Company','$Categary','$mfg','$exp',$mrp,$qty,'$des',
 '$folder')";
  $c=mysqli_query($conn,$sql);
  if($c)
  {
	  echo "<script>alert('Added Successfully');window.location.href='adminnew.php';</script>";
  }
	}
					}
					?>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Welcome PHARMA</h1>
							<!--<p>Developed By <a href="http://shafraz.freeiz.com">Shafraz Nizam</a></p>-->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>

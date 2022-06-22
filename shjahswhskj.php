
<!doctype html>
<html>
<head>
<title> project form</title>
<style type="text/css">
body{
background-image: url("mansi4.jpg");
background-size: cover;
}
.aa{
width: 400px;
height: 870px;
background-color: rgba(0,0,0,0.5);
margin:0 auto;
margin-top:40px;
padding-top:10px;
padding-left:50px;
border-radius: 15px;
-webkit-border-radius: 15px
-moz-border-radius: 15px;
color:white;
font-weight:bolder;
box-shadow: inset -4px -4px rgba(0,0,0,0.5);
font-size:18px;
}
.aa input[type="text"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}
.aa input[type="text"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}
.aa input[type="email"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}
.aa input[type="textarea"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}

.aa input[type="text"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}
.aa input[type="textarea"]{
width: 200px;
height: 35px;
border-radius: 5px;
border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
padding-left:5px;
}
.aa input[type="text"]{
width: 200px;
height: 35px;

border: 0;
border-radius:5px;
-webkit-border-radius: 5px;
-o-border-radius: 5px;
-moz-border-radius: 5px;
}
.aa input[type="submit"]
{
width:100px;
height:35px;
border:0;
border-radius:5px;
background-color:skyblue;
font-weight: bolder;
}
.aa input[type="submit"]
{
width:100px;
height:35px;
border:0;
border-radius:5px;
background-color:skyblue;
font-weight: bolder;
}
</style>
</head>
<body >
<div class="aa">
<div align="center">
<h2 style="color:yellow;">ADD-Product&nbsp;</h2>
</div>
<form action=" " method="POST">
<?php
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");	//make a connection
$id=$_GET['id'];
$query= "select * from addproduct where id='$id'";		//select query
$result=mysqli_query($conn,$query);
//$a=mysqli_fetch_array($result);
while($a=mysqli_fetch_array($result))
  {
   $id=$a['id'];
  $p_name=$a['product_name'];
  $p_price=$a['product_price'];
  $mfd=$a['mfd_date'];
  $exp=$a['exp_date'];
  $descript=$a['description'];
  $qty=$a['quantity'];
  $img=$a['image'];
  
 // $edit=$a['edit'];
  //$delete=$a['delete'];
  }
?>
Product-Image<input type="file" name="image"  value=" <?php echo $img; ?>" class="form-control"required><br><br>
Product-name:<input type="text" name="product_name" placeholder="Enter your product name" value=" <?php echo $p_name; ?>" required><br><br>
Product-price:<input type="text" name="product_price" placeholder="Enter product price" value=" <?php echo $p_price; ?>" required><br><br> 
Manufacturing-Date:<input type="date" name="mfd_date" value=" <?php echo $mfd; ?>" required><br><br>
Expiry-Date:<input type="date" name="exp_date" value=" <?php echo $exp; ?>" required><br><br>
Quantity:<input type="number" name="quantity"  value=" <?php echo $qty;?>"><br><br>
Description:<textarea name="description" cols="5" rows="5"value=" <?php echo $descript;?>" > <?php echo $descript;?></textarea><br><br>
<input type="submit" name="update" value="update">
<?php
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");
$id1=$_GET['id'];
if(isset($_POST['update']))
{
  $p_name=$_POST['product_name'];
  $p_price=$_POST['product_price'];
  $mfd=$_POST['mfd_date'];
  $exp=$_POST['exp_date'];
  $descript=$_POST['description'];
  $qty=$_POST['quantity'];
  $img=$_POST['image'];
$query1= "UPDATE addproduct SET product_name='$p_name',product_price='$p_price',mfd_date='$mfd',exp_date='$exp',description='$descript',quantity='$qty',image='$img' WHERE id='$id1'";
$result1=mysqli_query($conn,$query1);
echo "<script>alert(' update');window.location.href='stafftabledashbord.php';</script>";
}
?>
</form>
</body>
</html>
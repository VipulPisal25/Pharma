
<?php
		
		$res=mysqli_query($conn,"select * from add_product");
		while($row=mysqli_fetch_array($res))
		{
		?>
		<div class="container">
		
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <!--<span class="tag">Sale</span>-->
            <a href="shop-single.html"> <img src="<?php echo $row["image"]?>" alt="Image" width="200px" height="200px"></a>
            <h3 class="text-dark"><a href="shop-single.html"><?php echo $row["name"];?></a></h3>
            <p class="price"> &mdash; $<?php echo $row["mrp"];?></p>
			<p class="price"> &mdash; MF Date <?php echo $row["mfg"];?></p>
			<p class="price"> &mdash; Exp Date <?php echo $row["exp"];?></p>
			<p>
                <a href="#" class="btn btn-primary px-5 py-3">Buy Now</a>
              </p>
			<p> <?php echo $row["descripsion"];?> </p>
          </div>
		 
		  </div>
		  


<?php
include 'custdashboardh.php';
?>


<!doctype html>
<html>
<head>

<title>Table with database</title>
<style>
table, th, td {
	padding: 25px;
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
table#t01 {
    width: 0%;    
    background-color: #f1f1c1;
}
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('');
background-size: cover;
background-repeat: no-repeat;
height: 50%;
font-family: 'Numans', sans-serif;
}

</style>

</head>

<body>
<br><br><br>
 <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
<table style="width:30%" align="center" id="t01">
<tr>
<th>ID</th>
<th>Name</th>
<th>Company</th>
<th>Categary</th>
<th>Mfg</th>
<th>Exp</th>
<th>Mrp</th>
<th>Quantity</th>
<th>Descripsion</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr> 
 
<?php

error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect('localhost','root','','majorpharma');
$q="select * from add_product";
$result=mysqli_query($conn,$q);
$num="$result->num_rows";
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		$qro_id=$row["id"];
		//echo $row["qid"];
		echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["company"]."</td><td>".$row["categary"]."</td><td>".$row["mfg"]."</td><td>".$row["exp"]."</td><td>".$row["mrp"]."</td><td>".$row["quantity"]."</td><td>".$row["descripsion"]."</td><td><img src='".$row['image']."' height='100' width='100'/></td>"; 
		//echo '<td><img src="Img_collection/,'base64_encode($row['image']).'"></td>';
		//echo "<td><img=src="Img_collection/"".<?php echo $row['image']; ."style=width:50px;height:40px">."</td>";
		echo "<td><a href='#id=".$row["id"]."'>edit</a></td><td><a href='#id=".$row["id"]."'>delete</a></td></tr>";
	}
}

?>
   </table>    
            </div>
          </div>
        </div>
      </div>
    </div>
     <?php
   include 'custdashboard.php'; ?>
   </body>
   </html>
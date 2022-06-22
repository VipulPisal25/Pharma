<?php
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");
$id=$_GET['id'];
echo $id;
$query="delete from add_product where id='$id'";
mysqli_query($conn,$query);
echo "<script>alert(' deleted');window.location.href='productnew.php';</script>";

?>
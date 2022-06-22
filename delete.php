<?php
#include 'admindashboard.php';

$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");
$Id=$_GET['id'];
$sql = "delete from registration WHERE id='$Id'";
$result=mysqli_query($conn,$sql);

echo "<script>alert('Information Deleted');window.location.href='member1.php';</script>";

?>



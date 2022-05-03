<?php
#include 'admindashboard.php';

$conn=mysqli_connect("localhost","root","","majorpharma");
$Id=$_GET['id'];
$sql = "delete from registration WHERE id='$Id'";
$result=mysqli_query($conn,$sql);

echo "<script>alert('Information Deleted');window.location.href='member1.php';</script>";

?>



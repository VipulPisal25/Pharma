<?php
$conn=mysqli_connect("localhost","root","","majorpharma");
$id=$_GET['id'];
echo $id;
$query="delete from add_product where id='$id'";
mysqli_query($conn,$query);
echo "<script>alert(' deleted');window.location.href='productnew.php';</script>";

?>
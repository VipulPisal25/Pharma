<html>
<head>
<style>
body {
  background: #C5E1A5;
}
#img_b {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}


</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
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
		?>
		<div id="img_b">
		<img src="<?php echo $row['image'] ?>" height="400px" width="400px"/>
		</div>
		
		<?php
	}
}
?>
</form>
</body>
</html>
<?php
session_start();
$conn=mysqli_connect("database-1.cuhp9ojmpf3d.ap-south-1.rds.amazonaws.com","admin","adminadmin","majorpharma");

if(isset($_POST['insert']))
{
$name=$_POST['fullname'];
$mobile=$_POST['mobile_no'];
$email=$_POST['email_id'];
$user=$_POST['username'];
$pass=$_POST['password'];
$add=$_POST['address'];
    $duplicate_user_query="select id from registration where email_id='$email'";
    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=abcregistrationpage.php" />
        <?php
    }else{
      $query= "insert into registration (fullname,mobile_no,email_id,username,password,address) values('$name','$mobile','$email','$user','$pass','$add')";		//insert query
mysqli_query($conn,$query);
echo "<script>alert('thanks your registration doan sucessfully');window.location.href='pharmacyloginpage.php';</script>";
	}
}

if(isset($_POST['insert1']))
{
echo "fail";
}
?>
<!doctype html>
<html>
<head>
<title> project form</title>
<style type="text/css">
body{
background-image: url("images/hero_1.jpg");
background-size: cover;
}
.aa{
width: 350px;
height: 600px;
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
class="flow control"
width: 100%;
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
.aa input[type="password"]{
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
background-color: #45a049;
font-weight: bolder;
}
</style>
</head>
<body >
<div class="aa">
<h2 style="color:yellow;">Registration Form</h2>
<form action=" " method="POST">
Fullname:&nbsp;&nbsp;&nbsp;<input type="text" name="fullname" style="form" placeholder="Enter your name" class="flow-control"required><br><br>
 Mobile_no:&nbsp;&nbsp;<input type="text" name="mobile_no" class="form-control" placeholder="Mobile No" required pattern="[0-9]+"><br><br> 
 address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea  name="address" rows="3" cols="25" placeholder="Address" required="true" ></textarea><br><br>
email_id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="form-control" name="email_id" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
username:&nbsp;&nbsp;&nbsp;<input type="text" placeholder="please enter username" name="username"required><br><br>
password:&nbsp;&nbsp;&nbsp;<input type="text" placeholder=" please enter password"name="password"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="insert" value="Submit"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='pharmacyloginpage.php' >LOGIN HERE</a><br><br>
</form>
</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "babbs";

$conn = mysqli_connect($host, $user, $password, $dbname);
if(!$conn){
    die(mysqli_error("Error"+$conn));
}
else{
$id=$_GET['updateid'];
$sql="SELECT * FROM `customer` WHERE Customer_id= $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$address=$row['Address'];
$email=$row['Email'];
$contactNo=$row['Contact_Number'];
if(isset($_POST['update'])){
$name=$_POST['name']; 
$address=$_POST['address'];
$email=$_POST['email'];
$contactNo=$_POST['contact_number'];
}
$sql="UPDATE `customer` set Name='$name', Address='$address', Email='$email', Contact_Number='$contactNo' WHERE Customer_id='$id'";
$result= mysqli_query($conn, $sql);
if(isset($_POST['update'])){
if($result){
  header('location:display.php');
  
}
else{
  die(mysqli_error($con));
}
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="checkout.css" rel="stylesheet">
    <link href="/Mainweb.css" rel="stylesheet">
  </head>
  <body>
  <div class="header">
      <header class="header">
      <h1><a class="font" href="/DatabaseProject/MainWeb.html">BABB's COMPUTER PARTS</a></h1>
      </header>
      </div>
    <h1>Update</h1>
    <div class="container">
    <form action="" method="post">
      Name: <input type="text" name="name" required value=<?php echo $name?>><br>
      Address: <input type="text" name="address" required value=<?php echo $address?>><br>
      Email: <input type="text" name="email" required value=<?php echo $email?>><br>
      Contact Number: <input type="text" name="contact_number" required value=<?php echo $contactNo?>><br><br>
      <a href="display.php" input type="goBack" value="go-back" class="goBack">Go Back</a>
      <br><br>
      <button name="update" class="goBack" onclick="window.location.href='/DatabaseProject/BuyProd/display.php'";>UPDATE </button>
    </form> 
    </div>
   
  </body>
</html>
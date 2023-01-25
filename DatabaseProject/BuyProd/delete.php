<?php
$con=mysqli_connect('localhost','root','','babbs');
if(!$con){
    die(mysqli_error("Error"+$con));
}
$id=$_GET['deleteid'];
$sql="DELETE FROM `customer` WHERE Customer_id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:display.php');
}
else{
    die(mysqli_error($con));
}
exit;
?>
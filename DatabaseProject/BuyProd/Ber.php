<?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "babbs";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(isset($_POST['submit'])){
// Check connection
if ($conn) {
// Get the form data

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];

}
else{
  die("Connection failed: " . mysqli_connect_error());

}
// Insert the data into the database
$sql = "INSERT INTO customer (Name, Address, Email, Contact_number) VALUES ('$name', '$address', '$email', '$contact_number')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


?>


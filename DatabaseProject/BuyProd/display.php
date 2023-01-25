<?php
include'Ber.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Operations </th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    $sql="SELECT*FROM `customer`";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)){
     $id=$row['Customer_id'];
     $name=$row['Name'];
     $address=$row['Address'];
     $email=$row['Email'];
     $contactNo=$row['Contact_Number'];
     echo '<tr>
     <th scope="row">'.$id.'</th>
     <td>'.$name.'</td>
     <td>'.$address.'</td>
     <td>'.$contactNo.'</td>
     <td>
      <a href="update.php?updateid='.$id.'" class= "btn btn-dark"> Update </a>
      <a href="delete.php?deleteid='.$id.'" class= "btn btn-danger"> Delete </a>
   </td>
   </tr>';
  
  }
    ?>
   

   
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
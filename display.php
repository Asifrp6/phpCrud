<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- bootstrap css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>




<div class="container">
    <button type="button" class="btn btn-primary mt-5 text-light"><a class="text-light" href="user.php">Add New</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


    <?php
include 'connect.php';
$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

echo'

<tr>

<td scope="row">'.$id.'</td>
<td scope="row">'.$name.'</td>
<td scope="row">'.$email.'</td>
<td scope="row">'.$mobile.'</td>
<td scope="row">'.$password.'</td>


<td scope="row">
<button type="button" class="btn btn-info " ><a href="update.php?updatededid='.$id.'" class="text-dark">Update</a></button>
<button type="button" class="btn btn-danger "><a href="delete.php?deletedid='.$id.'" class="text-light">Delete</a></button>
</td>
</tr>';
}}
?>
  </tbody>
</table>

</div>
    
<!-- bootstap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'connect.php';

if(isset($_POST['submit'])){
$name=$_POST['username'];
$email=$_POST['useremail'];
$phone=$_POST['userphone'];
$password=$_POST['userpassword'];


$sql="insert into `crud`(name,email,mobile,password)
values('$name','$email','$phone','$password')";
$result=mysqli_query($con,$sql);
if($result)
{
  die(mysqli_error($con));
    echo"Not nsert";
}
}

?>


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

    <div class="container mt-5">

    <form method="post">

  <div class="mb-3">
    <label for="userName" class="form-label">Name</label>
    <input type="text" class="form-control" id="userName"name="username" aria-describedby="nameHelp">
  </div>


  <div class="mb-3">
    <label for="userEmail" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="userEmail" name="useremail" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="userPhone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="userPhone" name="userphone" aria-describedby="phoneHelp">
  </div>

  <div class="mb-3">
    <label for="userPass" class="form-label">Password</label>
    <input type="password" class="form-control" name="userpassword" id="userPass">
  </div>


  <button type="submit" name="submit" class="btn  btn-primary ">Submit</button>
</form>
    </div>


<!-- bootstap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
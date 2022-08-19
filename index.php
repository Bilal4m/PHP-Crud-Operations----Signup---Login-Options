<!DOCTYPE html>
<?php
  session_start();
  $conn = mysqli_connect('localhost','root','','crud');
  if(isset($_SESSION['email'])){
      // echo "<script>window.open('login.php',_self)</script>";
      echo $_SESSION['email'];
  }

?>

<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>

div {
  background-image: url('images/bg22.jpg') ;
  height: 100vh;
  width:100vh;
  background-size:cover;
  background-position: 100% 100%;
}

</style> 
</head>
<body>
<br><br>

<div class="container" >
  <h3>Welcome To My Form Page</h3>
  <a class="btn btn-primary " href="add_user.php">Fill New Form</a>
  <a class="btn btn-primary " href="view_user.php">View Existing Form</a>


  <a class="btn btn-danger " href="logout.php">Logout</a>
  

</div>

</body>
</html>

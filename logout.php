<?php
  session_start();
  $conn = mysqli_connect('localhost','root','','crud');
  (isset($_SESSION['email']));
  echo "<script> window.open('index.php','_self')</script>";
  session_destroy();

?>
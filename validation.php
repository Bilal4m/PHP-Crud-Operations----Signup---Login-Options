<?php
  session_start();



    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con ,'crud');
    
    

    
    $email = $_POST['email'];
    $pass = $_POST['password'];

    
    $s = "SELECT * FROM usertable WHERE email='$email && password = $pass";

    $result = mysqli_query($con , $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
      header('location:login2.php');
    }else{
      header('location:index.php');
    }
  

?>
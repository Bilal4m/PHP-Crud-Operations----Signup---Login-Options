
              
			  <?php

			  session_start();

              


			  $con = mysqli_connect('localhost','root','');

			  mysqli_select_db($con ,'crud');
              
			  

			  
			  $email = $_POST['email'];
			  $pass = $_POST['password'];

			  $s = "select * from usertable WHERE email = '$email' ";

			  $result = mysqli_query($con , $s);

			  $num = mysqli_num_rows($result);

			  if($num == 1){
				echo"Email Already Exist";
			  }else{
				$reg  = "INSERT INTO usertable(email, password) VALUES('$email','$pass')";
				mysqli_query ($con ,$reg);
				echo '<script>alert("Welcome... Now Login Plz")</script>';
				header('location:index.php');
				
				
			}
			
                    ?>
                
		    




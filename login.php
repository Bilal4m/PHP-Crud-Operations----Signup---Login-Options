<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="style.css">

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>



</style>

</head>
<body>
    

<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
                  <h2>Login Here</h2>
				  <form action="validation.php"method="post">
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary" name="login-btn">Login</button>
				  </form>
				</div>

				<div class="col-md-6 login-right">
                  <h2>Signup Here</h2>
				  <form action="registration.php"method="post">
				  <div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary" name="signup-btn">Signup Here</button>
				  </form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
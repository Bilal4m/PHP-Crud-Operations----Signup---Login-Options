<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register & Login User</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style>
		body{
    background: linear-gradient(rgba(0,0,50,0.5), rgba(0,0,50,0.5)),url(bg2.jpg); 
    /* background-size:cover; */
    background-position: center;
}

.login-box{
    max-width: 700px;
    float: none;
    margin: 150px auto;
}

.login-left{
    background: rgba(211,211,211,0.5);
    padding: 30px;
}
.login-right{
    background: #fff;
    padding: 30px;
}
.form-control{
    background-color: transparent !important;
}


	</style>
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label for="email">Email</label>
						    <input type="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="user">Password</label>
						    <input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> Login </button>
					</form>
				</div>

				<div class="col-md-6 login-right">
					<h2>Register</h2>
					<form action="registration.php" method="post">
					<div class="form-group">
							<label for="email">Email</label>
						    <input type="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="user">Password</label>
						    <input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> Register </button>
					</form>
				</div>

				
			</div>
		</div>
	</div>
</body>
</html>
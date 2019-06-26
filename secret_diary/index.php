<!-- <?php require_once 'auth.php' ?>
 -->

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<!-- bs4 css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 green"><h1>Secret Diary</h1></div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<form action="index.php" method="POST">
					<h3 class="test-center">REGISTER</h3>
					<br>
					<?php
						if (@$error != '') {
							echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
						}
						if (@$message != '') {
							echo '<div class="alert alert-success">'.addslashes($message).'</div>';
						}

					?>
					<div class="form-group">
						<label for="username">Email</label>
						<input type="email" name="email" id="email" value="<?php echo addslashes($email) ?>" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" value="<?php echo addslashes($password) ?>" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<button type="submit" name="submit" value="signup" id="submit" class="btn btn-primary btn-block btn-lg">SIGN UP</button>
					</div>

					<p class="text-center">I am a member.<a href="login.php">Login In</a></p>
				</form>
			</div>
		</div>
	</div>


</body>
</html>






















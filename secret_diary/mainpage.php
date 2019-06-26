<!-- <?php include_once "auth.php"; ?> -->

	 <?php
	 include_once "connection.php";
	
	 @$_SESSION['id'];

	 $query = "SELECT diary FROM users WHERE id = '".@$_SESSION['id']."' LIMIT 1";
	 $result = mysqli_query($link,$query);
	 $row = mysqli_fetch_array($result);
	 $diary = $row['diary'];

	 ?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>MAINPAGE</title>
	<!-- bs4 css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style_2.css">
</head>
<body>
	<br>
	<div class="container">
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand" name="logout" id="logout" href="login.php?logout=1" onclick="return confirm('Are you sure to log out?')">Log Out</a>
		</nav>
		<br><br>
		<div class="row">
			<center><h3>Write your memory here...</h3></center>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4"><h2>SECRET Diary_</h2></div>
		</div>

	<form action="">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<textarea name="diary" class="form-control" cols="30" rows="10"><?php echo $diary; ?></textarea>
			</div>
		</div>
		<br>
		<div class="form-group" style="text-align: center;">
			<button type="submit" name="ok" class="btn btn-dark btn-lg">OK</button>
		</div>
	</form>


	</div>
	<script>
		// $("textarea").css("min-height",$(window).height()*0.7);
		$("textarea").keyup(function() {
			$.post("updatediary.php", {diary:$("textarea").val()} );
		});
		
	</script>
</body>
</html>






















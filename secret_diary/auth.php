<?php
session_start();
include_once 'connection.php';
//header()  don't use any HTML or echo sth !!


//click logout && have session.  才要刪除session
if (@$_GET["logout"] ==1 && $_SESSION['id']) {
	session_destroy();
	$message= "You are log out!";
}

// error_reporting(0);
@$email = $_POST['email'];
@$password = $_POST['password'];

if (@$_POST['submit'] == 'signup') {

	if (empty($email)) {
		@$error .= "Email is required!"."<br>";
	} else if (!(filter_var($email,FILTER_VALIDATE_EMAIL))) {
	 	@$error .= "The email is invalid!"."<br>";
	 }
	if (empty($password)) {
		@$error .= "Password is required!"."<br>";
	} else
		if (strlen($password) <8 ) {
			@$error .= "Password must at least 8 characters"."<br>";
		}
	 
	 if (@$error !='') {
	 	echo @$error;
	 } else {
	 	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	 	$query = "SELECT*FROM users WHERE email='".mysqli_real_escape_string($link,$email)."'";
	 	$result = mysqli_query($link,$query);

	 	$results = mysqli_num_rows($result);
	 	if ($results) {

	 		$error .="The email is already exist."."<br>";

	 	} else {
	 		$query = "INSERT INTO users (email,password) VALUES ('".mysqli_real_escape_string($link,$email)."','$password')";
	 		$mysqli_query = mysqli_query($link,$query);
	 		echo "You've been sign up!";
	 		$sessionid = $_SESSION['id'] = mysqli_insert_id($link);
	 		header("location:mainpage.php");
	 	}

	 }
	 if (@$error !='') {
	 	echo @$error;
	 }
}

if (@$_POST['submit'] == 'login') {
	$query = "SELECT* FROM users WHERE email='".mysqli_real_escape_string($link,$email)."' AND password='$password'";

	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array($result);
	print_r($row);
	echo "<br>";
	//if session id有 表示有這會員
	if($row){

	$_SESSION['id'] = $row['id'];
	 	
	header("location:mainpage.php");	 	

	} else {

		@$error .="We cannot find the user...";
	}
}

?>




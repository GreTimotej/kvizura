<?php
session_start();
require_once("connect.php");

if(isset($_POST) & !empty($_POST)){
	if(strlen($_POST["password"]) >= 8){
		$username = mysqli_real_escape_string($connect, $_POST["username"]);
		$password = md5($_POST["password"]); 
			
		$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		$sent = mysqli_query($connect, $sql);

		if($sent){
			$_SESSION["username"] = $username;
			header("location: index.php");
		}
			
		else{
			echo("<script>alert('Username already in use!');</script>");
		}

	}
	
	else{
		echo("<script>alert('Password must be at least 8 characters long!');</script>");
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/png" href="img\fav_icon.png">
	<title>Quiz</title>
	<script type="text/javascript" src="javascript/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css\css.css">
	<link rel="stylesheet" type="text/css" href="css\css2.css">
</head>

<body class="oz">
	<div class="slika">
		<img src="img/Quiz-Time.png" height="300" width="500">
	</div>
	
	<div class="ozadje" align="center" class="logreg">
		<form method="POST" class="logreg">
		<h1 class="naslov">REGISTER</h1>
			<input class="input" type="text" name="username" placeholder="Username"><br>
			<input class="input" type="password" name="password" placeholder="Password"><br>
			<input class="vnos3" type="submit" value="Register"><br>
			<b class="text2">Have an account? Login <a href="login.php">here.</a></b>
		</form>
	</div>
</body>
</html>
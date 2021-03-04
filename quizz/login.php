<?php
session_start();
require_once("connect.php");

if(isset($_POST) & !empty($_POST)){
	$username = $_POST['name'];

	
	$_SESSION["username"] = $username;
	header("location: index.php");
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="oz">
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quiz</li>
        </ol>
    </nav>
	<div class="slika">
		<img src="img/Quiz-Time.png" height="300" width="500">
	</div>

	<div class="ozadje" align="center" class="logreg">
		<form method="POST" id="login" class="logreg">
		<h1 class="naslov">Menu</h1>
			<input class="input" type="text" name="name" placeholder="Your name" required><br>
			<!-- <input class="input" type="password" name="password" placeholder="Password" required><br> -->
			<input class="vnos3" type="submit" value="Start!"><br>
			<!-- <b class="text2">Don't have an account? Register <a href="register.php">here.</a> Or play as a  -->
			<!-- <a href="guest.php">guest.</a></b> -->
		</form>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
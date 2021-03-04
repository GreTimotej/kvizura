<?php
session_start();
require_once("connect.php");

if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $sent = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($sent);

    if($row["admin"] == "true"){
        $type = "style='display: block'";
    }

    else{
        $type = "style='display: none'";
    }
}

else{
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/png" href="img\fav_icon.png">
	<title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="css\css.css">
</head>

<body class="oz2">
<nav class="navbar2">	
    <a class="active">Logged in as: <?php echo($_SESSION["username"]);?> </a>	
	<a onclick="location.href='user.php';">LOGOUT</a>
    <a onclick="location.href='index.php';">MENU</a>
    </nav>
    <div class="line"></div>



<div id="user">
    <b class="text2">User: <?php echo($_SESSION["username"]);?></b><br>
    <b class="text2">The best you have done is <?php echo($row["maxpoints"]);?> points.</b><br>
    <b class="text2">You solved this test <?php echo($row["times"]);?> times.</b><br>
    <button type="button" class="vnos3" style="text-align:center; padding:20px;" onclick="window.location.href='logout.php'">Logout</button><br>
    <div  <?php echo($type);?>>
        <button class="vnos3" style="text-align:center; padding:20px;" type="button" onclick="window.location.href='create.php'">Create Questions</button>
    </div>
<div>
</body>
</html>
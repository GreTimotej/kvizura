<?php
session_start();
require_once("connect.php");

if(!isset($_SESSION["username"])){
    header("location: index.php");
}

$user = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username='$user'";
$sent = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($sent);

if($row["admin"] != "true"){
    header("location: index.php");
}

$sql2 = "SELECT * FROM questions";
$sent2 = mysqli_query($connect, $sql2);
$nu = mysqli_num_rows($sent2);
$nu++;

if(isset($_POST) & !empty($_POST)){
    $question = $_POST["question"];
    $true = $_POST["true"];
    $false1 = $_POST["false1"];
    $false2 = $_POST["false2"];
    $false3 = $_POST["false3"];

    $pic = $_FILES["picture"];
    $picName = $pic["name"];
    $picTmp = $pic["tmp_name"];
    $picSize = $pic["size"];
    $picErr = $pic["error"];

    $picExt = explode(".", $picName);
    $picExt1 = strtolower(end($picExt));
    $format = ["jpg", "jpeg", "png"];

    if(in_array($picExt1, $format)){
        if($picErr === 0){
            $picNameNew = $nu . "." . $picExt1;
            $picLoc = "img/" . $picNameNew;
            move_uploaded_file($picTmp, $picLoc);

            $sql1 = "INSERT INTO questions (question, true1, false1, false2, false3, img) VALUES ('$question', '$true', '$false1', '$false2', '$false3', '$picLoc')";
            $sent1 = mysqli_query($connect, $sql1);

            if($sent1){
                echo("<script>alert('Question created!');</script>");
            }

            else{
                echo("<script>alert('Error!');</script>");
            }
        }

        else{
            echo("<script>alert('Error!');</script>");
        }
    }

    else{
        echo("<script>alert('File format not supported!');</script>");
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
    <link rel="stylesheet" type="text/css" href="css\css3.css">
</head>

<body class="oz5">
<nav class="navbar">	
    <a class="active">Logged in as: <?php echo($_SESSION["username"]);?> </a>	
	<a onclick="location.href='user.php';">LOGOUT</a>
    <a onclick="location.href='index.php';">MENU</a>
    </nav>
    <div class="line"></div>

    <div id="create">
        <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Input your question and file</legend>
            <b class="text3">Input your question:</b> <input class="input2" type="text" name="question" placeholder="Question" required><br>
            <b class="text3">Input correct answer:</b> <input class="input2" type="text" name="true" placeholder="Correct answer" required><br>
            <b class="text3">Input wrong answer 1:</b> <input class="input2" type="text" name="false1" placeholder="Wrong answer 1" required><br>
            <b class="text3">Input wrong answer 2:</b> <input class="input2" type="text" name="false2" placeholder="Wrong answer 2" required><br>
            <b class="text3">Input wrong answer 3:</b> <input class="input2" type="text" name="false3" placeholder="Wrong answer 3" required><br>
            <b class="text3">Input picture for you question:</b><input class="input2 click" type="file" name="picture" required><br>
            <input type="submit" class="vnos2" value="Create">
        </fieldset>
        </form>
    </div>
</body>
</html>
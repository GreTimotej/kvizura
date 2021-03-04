<?php
session_start();
require_once("connect.php");
error_reporting(E_ERROR | E_PARSE);

$quest = $_SESSION["quest"];
$username = $_SESSION["username"];
$points = 0;

for($i = 1; $i < 6; $i++){
	$use = "q".(string)$i;
	if(isset($_POST[$use])){
		if($_POST[$use] == "true"){
			$points++;
		}
	}
}




$times = $row["times"];
$times++;

// $sql1 = "UPDATE users SET times='$times' WHERE username='$username'";
// $sent1 = mysqli_query($connect, $sql1);


	$sql = "SELECT count(*) FROM records WHERE name = '$username'";
	$sent = mysqli_query($connect, $sql);
	if($sent != 0)
	{
		$sql = "insert into records(name, score) values('$username', $points)";
		$sent = mysqli_query($connect, $sql);
	}
	else
	{
		$sql = "update records set score = $points where name = '$username'";
		$sent = mysqli_query($connect, $sql);
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/png" href="img\fav_icon.png">
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css\css.css">
	<link rel="stylesheet" type="text/css" href="css\css2.css">
</head>

<body class="oz4">
<nav class="navbar">	
    <a class="active">You are: <?php echo($_SESSION["username"]);?> </a>
		</div>
    </nav>
    <div class="line"></div>

	<h1>You got <?php echo($points);?> out of <?php echo(count($quest));?> correct!</h1>
	<h2>Scoreboard</h2>
	<h3><a href="login.php" id="tryagain"  class="text">Try Again</a></h3>
	
	<table align="center" class="table">
		<tr>
			<th>USERNAME</th>
			<th>SCORE</th>
		</tr>

		<?php
		$sql3 = "SELECT name, score FROM records ORDER BY score DESC LIMIT 10";
		$sent3 = mysqli_query($connect, $sql3);
		if(mysqli_num_rows($sent3) > 0){
			while($row1 = mysqli_fetch_assoc($sent3)){
				echo("<tr><td>" . $row1["name"] . "</td><td>" . $row1["score"] . "</td></tr>");
			}
		}
		?>
	</table>
</body>
</html>
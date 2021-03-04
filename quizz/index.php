<?php
session_start();
require_once("connect.php");

if(!isset($_SESSION["username"])){
    header("location: login.php");
}

$sql = "SELECT * FROM questions";
$sent = mysqli_query($connect, $sql);
$count = mysqli_num_rows($sent);

$questions=[];

while(count($questions) < 5){
	$random = rand(1, $count);
	if(!in_array($random, $questions)){
		$questions[] = $random;
    }
}

$_SESSION["quest"] = $questions;

$sql1 = "SELECT * FROM questions WHERE questions_id='$questions[0]'";
$sent1 = mysqli_query($connect, $sql1);
$row1 = mysqli_fetch_assoc($sent1);
$question_1 = $row1["question"];
$true_1 = $row1["true1"];
$false1_1 = $row1["false1"];
$false2_1 = $row1["false2"];
$false3_1 = $row1["false3"];
$img_1 = $row1["img"];

$sql2 = "SELECT * FROM questions WHERE questions_id='$questions[1]'";
$sent2 = mysqli_query($connect, $sql2);
$row2 = mysqli_fetch_assoc($sent2);
$question_2 = $row2["question"];
$true_2 = $row2["true1"];
$false1_2 = $row2["false1"];
$false2_2 = $row2["false2"];
$false3_2 = $row2["false3"];
$img_2 = $row2["img"];

$sql3 = "SELECT * FROM questions WHERE questions_id='$questions[2]'";
$sent3 = mysqli_query($connect, $sql3);
$row3 = mysqli_fetch_assoc($sent3);
$question_3 = $row3["question"];
$true_3 = $row3["true1"];
$false1_3 = $row3["false1"];
$false2_3 = $row3["false2"];
$false3_3 = $row3["false3"];
$img_3 = $row3["img"];

$sql4 = "SELECT * FROM questions WHERE questions_id='$questions[3]'";
$sent4 = mysqli_query($connect, $sql4);
$row4 = mysqli_fetch_assoc($sent4);
$question_4 = $row4["question"];
$true_4 = $row4["true1"];
$false1_4 = $row4["false1"];
$false2_4 = $row4["false2"];
$false3_4 = $row4["false3"];
$img_4 = $row4["img"];

$sql5 = "SELECT * FROM questions WHERE questions_id='$questions[4]'";
$sent5 = mysqli_query($connect, $sql5);
$row5 = mysqli_fetch_assoc($sent5);
$question_5 = $row5["question"];
$true_5 = $row5["true1"];
$false1_5 = $row5["false1"];
$false2_5 = $row5["false2"];
$false3_5 = $row5["false3"];
$img_5 = $row5["img"];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/png" href="img\fav_icon.png">
	<title>Quiz</title>
	<script type="text/javascript" src="javascript/script.js"></script>
    <link rel="stylesheet" href="css\css.css">
    <link rel="stylesheet" href="css\css2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="oz3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quiz</li>
        </ol>
    </nav>
    <div class="line"></div>
    
    <form method="POST" action="result.php">
        <div id="one">
            <div class="container">
                <?php
                $red_1=[];
                while(count($red_1) < 4){
                    $random = rand(1, 4);
                    if(!in_array($random, $red_1)){
                        $red_1[] = $random;
                    }
                }

                $input_1 = ["<li><label class='text2'><input type='radio' class='radio option-input' name='q1' value='true'>$true_1</label></li>", 
                "<li><label class='text2'><input type='radio' name='q1' class='radio option-input' value='false'>$false1_1</label></li>", 
                "<li><label class='text2'><input type='radio' name='q1' class='radio option-input' value='false'>$false2_1</label></li>", 
                "<li><label class='text2'><input type='radio' name='q1' class='radio option-input' value='false'>$false3_1</label></li>"];

                $a1 = $red_1[0];
                $a2 = $red_1[1];
                $a3 = $red_1[2];
                $a4 = $red_1[3];

                echo("<h1>" .'1. '. $question_1 . "</h1>");
                echo "<ul class='rm'>";
                echo($input_1[$a1-1]);
                echo($input_1[$a2-1]);
                echo($input_1[$a3-1]);
                echo($input_1[$a4-1]);
                echo "</ul>";
                ?>
                <button class="vnos1" type="button" onclick="return next()">Next</button>
            </div>

            <div class="picture">
                <img src=<?php echo($img_1);?>>
            </div>
        </div>
      


        <div id="two" style="display: none">
            <div class="container">
                <?php
                $red_2=[];
                while(count($red_2) < 4){
                    $random = rand(1, 4);
                    if(!in_array($random, $red_2)){
                        $red_2[] = $random;
                    }
                }

                $input_2 = ["<li><label class='text2'><input type='radio' class='radio option-input' name='q2' value='true'>$true_2</label></li>", 
                "<li><label class='text2'><input type='radio' name='q2' class='radio option-input' value='false'>$false1_2</label></li>", 
                "<li><label class='text2'><input type='radio' name='q2' class='radio option-input' value='false'>$false2_2</label></li>", 
                "<li><label class='text2'><input type='radio' name='q2' class='radio option-input' value='false'>$false3_2</label></li>"];

                $b1 = $red_2[0];
                $b2 = $red_2[1];
                $b3 = $red_2[2];
                $b4 = $red_2[3];

                echo("<h1>" .'2. '. $question_2 . "</h1>");
                echo "<ul class='rm'>";
                echo($input_2[$b1-1]);
                echo($input_2[$b2-1]);
                echo($input_2[$b3-1]);
                echo($input_2[$b4-1]);
                echo "</ul>"
                ?>
                <button class="vnos2" type="button" onclick="return back()">Back</button>
                <button class="vnos1" type="button" onclick="return next()">Next</button>
            </div>

            <div class="picture">
                <img src=<?php echo($img_2);?>>
            </div>
        </div>



        <div id="three"  style="display: none">
            <div class="container">
                <?php
                $red_3=[];
                while(count($red_3) < 4){
                    $random = rand(1, 4);
                    if(!in_array($random, $red_3)){
                        $red_3[] = $random;
                    }
                }

                $input_3 = ["<li><label class='text2'><input type='radio' class='radio option-input' name='q3' value='true'>$true_3</label></li>", 
                "<li><label class='text2'><input type='radio' name='q3' class='radio option-input' value='false'>$false1_3</label></li>", 
                "<li><label class='text2'><input type='radio' name='q3' class='radio option-input' value='false'>$false2_3</label></li>", 
                "<li><label class='text2'><input type='radio' name='q3' class='radio option-input' value='false'>$false3_3</label></li>"];

                $c1 = $red_3[0];
                $c2 = $red_3[1];
                $c3 = $red_3[2];
                $c4 = $red_3[3];

                echo("<h1>" .'3. '. $question_3 . "</h1>");
                echo "<ul class='rm'>";
                echo($input_3[$c1-1]);
                echo($input_3[$c2-1]);
                echo($input_3[$c3-1]);
                echo($input_3[$c4-1]);
                echo "</ul>"
                ?>
                <button class="vnos2" type="button" onclick="return back()">Back</button>
                <button class="vnos1" type="button" onclick="return next()">Next</button>
            </div>

            <div class="picture">
                <img src=<?php echo($img_3);?>>
            </div>
        </div>



        <div id="four" style="display: none">
            <div class="container">
                <?php
                $red_4=[];
                while(count($red_4) < 4){
                    $random = rand(1, 4);
                    if(!in_array($random, $red_4)){
                        $red_4[] = $random;
                    }
                }

                $input_4 = ["<li><label class='text2'><input type='radio' class='radio option-input' name='q4' value='true'>$true_4</label></li>", 
                "<li><label class='text2'><input type='radio' name='q4' class='radio option-input' value='false'>$false1_4</label></li>", 
                "<li><label class='text2'><input type='radio' name='q4' class='radio option-input' value='false'>$false2_4</label></li>", 
                "<li><label class='text2'><input type='radio' name='q4' class='radio option-input' value='false'>$false3_4</label></li>"];

                $d1 = $red_4[0];
                $d2 = $red_4[1];
                $d3 = $red_4[2];
                $d4 = $red_4[3];

                echo("<h1>" .'4. '. $question_4 . "</h1>");
                echo "<ul class='rm'>";
                echo($input_4[$d1-1]);
                echo($input_4[$d2-1]);
                echo($input_4[$d3-1]);
                echo($input_4[$d4-1]);
                echo "</ul>"
                ?>
                <button class="vnos2" type="button" onclick="return back()">Back</button>
                <button class="vnos1" type="button" onclick="return next()">Next</button>
            </div>

            <div class="picture">
                <img src=<?php echo($img_4);?>>
            </div>
        </div>



        <div id="five" style="display: none">
            <div class="container">
                <?php
                $red_5=[];
                while(count($red_5) < 4){
                    $random = rand(1, 4);
                    if(!in_array($random, $red_5)){
                        $red_5[] = $random;
                    }
                }

                $input_5 = ["<li><label class='text2'><input type='radio' class='radio option-input' name='q5' value='true'>$true_5</label></li>", 
                "<li><label class='text2'><input type='radio' name='q5' class='radio option-input' value='false'>$false1_5</label></li>", 
                "<li><label class='text2'><input type='radio' name='q5' class='radio option-input' value='false'>$false2_5</label></li>", 
                "<li><label class='text2'><input type='radio' name='q5' class='radio option-input' value='false'>$false3_5</label></li>"];

                $e1 = $red_5[0];
                $e2 = $red_5[1];
                $e3 = $red_5[2];
                $e4 = $red_5[3];

                echo("<h1>" .'5. '. $question_5 . "</h1>");
                echo "<ul class='rm'>";
                echo($input_5[$e1-1]);
                echo($input_5[$e2-1]);
                echo($input_5[$e3-1]);
                echo($input_5[$e4-1]);
                echo "</ul>"
                ?>
                <button class="vnos2" type="button" onclick="return back()">Back</button>
                <input class="vnos1" type="submit" value="Finish">
            </div>

            <div class="picture">
                <img src=<?php echo($img_5);?>>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
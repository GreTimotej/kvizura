<?php
$connect = mysqli_connect('localhost', 'timotej', 'pass');
if(!$connect){
	die("Connection failed ".mysqli_error($connect));
}

$baza = mysqli_select_db($connect, 'quizz');
if(!$baza){
	die("Connection failed ".mysqli_error($baza));
}

mysqli_set_charset($connect , 'utf8');
?>
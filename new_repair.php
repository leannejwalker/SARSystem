<?php
$username = "brobdingnagian";
$password = "Qsvd24^54";
$database = "brobdingnagian_co_uk_";

$mysqli = new mysqli("localhost:3306", $username, $password, $database);

$category = $mysqli->real_escape_string($_POST['category']);
$itemname = $mysqli->real_escape_string($_POST['itemname']);
$make = $mysqli->real_escape_string($_POST['make']);
$model = $mysqli->real_escape_string($_POST['model']);
$age = $mysqli->real_escape_string($_POST['age']);
$cost = $mysqli->real_escape_string($_POST['cost']);
$dof = $mysqli->real_escape_string($_POST['dof']);
$oow = $mysqli->real_escape_string($_POST['oow']);
$prevrepair = $mysqli->real_escape_string($_POST['prevrepair']);

$mysqli = "INSERT INTO repairs (category, itemname, make, model, age, cost, dof, oow, prevrepair)
            VALUES ('{$category}','{$itemname}','{$make}','{$model}','{$age}','{$cost}','{$dof}','{$oow}','{$prevrepair}')";

$mysqli->query($query);
$mysqli->close();
header("location: login.php");
exit;
?>
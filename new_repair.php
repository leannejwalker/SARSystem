<?php

require_once "config.php";

/*$username = "brobdingnagian";
$password = "Qsvd24^54";
$database = "brobdingnagian_co_uk_";

$mysqli = new mysqli("localhost:3306", $username, $password, $database);*/

$category = $link->($_POST['category']);
$itemname = $link->($_POST['itemname']);
$make = $link->($_POST['make']);
$model = $link->($_POST['model']);
$age = $link->($_POST['age']);
$cost = $link->($_POST['cost']);
$dof = $link->($_POST['dof']);
$oow = $link->($_POST['oow']);
$prevrepair = $link->($_POST['prevrepair']);

$link = "INSERT INTO repairs (category, itemname, make, model, age, cost, dof, oow, prevrepair)
            VALUES ('{$category}','{$itemname}','{$make}','{$model}','{$age}','{$cost}','{$dof}','{$oow}','{$prevrepair}')";

$link->query($query);
$link->close();
header("location: login.php");
exit;
?>
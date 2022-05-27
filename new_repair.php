<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: my-repair-sessions.php");
    exit;
}
 
// Include config file
require_once "config.php";

$category = $mysqli->real_escape_string($_POST['category']);
$itemname = $mysqli->real_escape_string($_POST['itemname']);
$make = $mysqli->real_escape_string($_POST['make']);
$model = $mysqli->real_escape_string($_POST['model']);
$age = $mysqli->real_escape_string($_POST['age']);
$cost = $mysqli->real_escape_string($_POST['cost']);
$dof = $mysqli->real_escape_string($_POST['dof']);
$oow = $mysqli->real_escape_string($_POST['oow']);
$prevrepair = $mysqli->real_escape_string($_POST['prevrepair']);

$query = "INSERT INTO repairs (category, itemname, make, model, age, cost, dof, oow, prevrepair)
            VALUES ('{$category}','{$itemname}','{$make}','{$model}','{$age}','{$cost}','{$dof}','{$oow}','{$prevrepair}')";

$mysqli->query($query);
$mysqli->close();

?>
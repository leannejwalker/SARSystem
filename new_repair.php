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

$category = $sql->real_escape_string($_POST['category']);
$itemname = $sql->real_escape_string($_POST['itemname']);
$make = $sql->real_escape_string($_POST['make']);
$model = $sql->real_escape_string($_POST['model']);
$age = $sql->real_escape_string($_POST['age']);
$cost = $sql->real_escape_string($_POST['cost']);
$dof = $sql->real_escape_string($_POST['dof']);
$oow = $sql->real_escape_string($_POST['oow']);
$prevrepair = $sql->real_escape_string($_POST['prevrepair']);

$sql = "INSERT INTO repairs (category, itemname, make, model, age, cost, dof, oow, prevrepair)
            VALUES ('{$category}','{$itemname}','{$make}','{$model}','{$age}','{$cost}','{$dof}','{$oow}','{$prevrepair}')";

$sql->query($query);
$sql->close();

?>
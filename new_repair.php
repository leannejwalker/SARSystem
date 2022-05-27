<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: account.php");
    exit;
}
 
// Include config file
require_once "config.php";

$field1 = $mysqli->real_escape_string($_POST['category']);
$field2 = $mysqli->real_escape_string($_POST['itemname']);
$field3 = $mysqli->real_escape_string($_POST['make']);
$field4 = $mysqli->real_escape_string($_POST['model']);
$field5 = $mysqli->real_escape_string($_POST['age']);
$field4 = $mysqli->real_escape_string($_POST['cost']);
$field5 = $mysqli->real_escape_string($_POST['dof']);
$field6 = $mysqli->real_escape_string($_POST['oow']);
$field7 = $mysqli->real_escape_string($_POST['prevrepair']);

$query = "INSERT INTO repairs (category, itemname, make, model, age, cost, dof, oow, prevrepair)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}','{$field7}')";

$mysqli->query($query);
$mysqli->close();
?>
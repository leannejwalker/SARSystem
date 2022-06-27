<?php

error_reporting(E_ALL);

// Initialize the session
session_start();
 
// Include config file
require_once "config.php";

$currentid=$_SESSION['id'];
$sql = ("SELECT access_id FROM users WHERE id=".$currentid."");
$result = mysqli_query($link, $sql);
$singleRow = mysqli_fetch_assoc($result);

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                                
    if ($result =="admin"){

        header("location: admin_console/account.php");

    }else if($result =="user"){

        header("location: customers/account.php");

    }
}

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// Initialize the session
session_start();

require_once "./scripts/config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    include "./src/auth/login.php";
    // header("location: /src/auth/login.php");
}

// Check if the user is logged in, if so then redirect him to the main page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    include "./pages/all/account.php";
    // header("location: /src/all/account.php");
}
?>

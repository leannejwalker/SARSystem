<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// Initialize the session
session_start();

require_once "./scripts/config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    include "./scripts/css.php";
    include "./scripts/js.php";
    include "./src/misc/simple-header.php";
    include "./src/auth/login.php";
    include "./src/auth/register.php";
    // header("location: /src/auth/login.php");
}

// Check if the user is logged in, if so then redirect him to the main page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true  || $access_id='customer'){

    include "./src/all/header.php";
    include "./src/all/account.php";
    include "./src/all/footer.php";
    // header("location: /src/all/account.php");
}
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true  || $access_id='volunteer'){

    include "./src/all/volunteer.php";
    include "./src/all/account.php";
    include "./src/all/footer.php";
    // header("location: /src/all/account.php");
}
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true  || $access_id='admin'){

    include "./src/all/adminheader.php";
    include "./src/all/account.php";
    include "./src/all/footer.php";
    // header("location: /src/all/account.php");
}
?>

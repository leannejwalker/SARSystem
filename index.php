<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// Initialize the session
session_start();

require_once "./scripts/config.php";
require_once "./scripts/echo.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    echo $loginpage;
    // header("location: /src/auth/login.php");
}


// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    $currentid=$_SESSION['id'];
    $sql = ("SELECT access_id FROM users WHERE id=".$currentid."" );


    if ($sql["access_id"] =='customer'){

        echo $loggedin;

    }
    if ($sql["access_id"] == 'volunteer'){

        echo $loggedin;

    }
    if ($sql["access_id"] =='admin'){

        echo $loggedin;

    }
}
?>
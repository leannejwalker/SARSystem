<?php

// Initialize the session
session_start();
require_once "scripts/config.php";
require_once "scripts/echo.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    echo $loginpage;
    end();
}


// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    echo $loggedin;
    end();
}

?>
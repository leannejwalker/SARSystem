<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /src/auth/login.php");
    exit;
}

// Check if the user is logged in, if so then redirect him to the main page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: /src/all/account.php");
    exit;
}
?>
<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// Initialize the session
session_start();
require_once "scripts/config.php";


// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    // If loggined in, redirect to summary/account page
    header('./pages/customers/cust-account.php');
    exit;

}
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    // If not logged in, redirect to login page
    header('./src/auth/login.php');
    exit;

};
?>
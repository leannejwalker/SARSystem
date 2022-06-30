<?php

// Initialize the session
session_start();
require_once "scripts/config.php";


// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    // If loggined in, redirect to summary/account page
    header('./pages/customers/cust-account.php');

}else{

    // If not logged in, redirect to login page
    header('./src/auth/login.php');

};
?>
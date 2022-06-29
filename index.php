<?php

// Initialize the session
session_start();

// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    // If loggined in, redirect to summary/account page
    header('./src/misc/account.php')

}else{

    header('./pages/customers/cust-account.php')

};
?>
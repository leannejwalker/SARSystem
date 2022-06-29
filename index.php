<?php

// Initialize the session
session_start();

// Check if the user is logged in
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

    // If loggined in, redirect to summary/account page
    isset($loggedin);
    echo $loggedin;

}else{

    isset($loginpage);
    // If not logged in, redirect to login page
    echo $loginpage;

};
?>
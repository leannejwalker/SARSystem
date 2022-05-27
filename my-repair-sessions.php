<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<script language="JavaScript" type="text/javascript" src="/js/jquery-3.6.0.js"></script>
  <head>
    <meta charset="UTF-8">
    <title>My Repair Sessions - Share and Repair</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    body {
    background-image: url('img/background.jpg');
  }
  .main{
    border: 0.1em solid #ffffff;
    margin: 5em;
    padding-bottom: 3em;
    padding-left: 5em;
    border-radius: 1em;
    background: rgba(255, 255, 255, 0.7);
  }



  
  </style>
  <body>
  <?php include "header.php"?>
  <div class="main">

  </div>


  
    <script>

    </script>
  </body>
</html>
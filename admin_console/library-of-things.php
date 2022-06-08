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
      <title>Library Of Things - Share and Repair</title>
      <link rel="icon" type="image/x-icon" href="img/favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    body {
    background-image: url('img/background.jpg');
  }
  </style>

  <body>
  <?php include "header.php"?>

  <div class="row">
	  <div class="vis-products ns 1">
	    <div class="column">
	      <div class="card">
	        <img src="../img/tmb.png" id="img1" style="width:100%">
	        <div class="container" id="repair">
	          <h2>Thermal Paste Re-application &amp; Deep Clean</h2>
	          <p class="title">For Nintendo Switch</p>
	          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	          <p>£10</p>
	          <p><button class="button">Add to Basket</button></p>
	        </div>
	      </div>
	    </div>
  
    <script>

    </script>
  </body>
</html>
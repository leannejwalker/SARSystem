<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php");
    exit;
}

$sql = ("SELECT * FROM lot");
$result = mysqli_query($link, $sql);
$card = mysqli_fetch_assoc($result);


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

  .column {
  float: left;
  width: 19%;
  margin-bottom: 16px;
  padding: 2em 2em;
  text-align: center;
  justify-content: center;
  padding-left: 4em;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container#repair {
  padding: 0 22px;
  text-align: center;
  background: rgba(255, 255, 255, 0.9);
}

.container#repair::after, .row::after {
  content: "";
  clear: both;
  display: table;
  margin: auto;
  width: 80%;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

#img1{
  float: none;
  position: none;
  block-size: auto;
  padding: 0px;
  margin-left: 0px;
  margin-right:0px;
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
	          <h1><?php echo $report['item_name']; ?></h1>
	          <p class="title">For Nintendo Switch</p>
	          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	          <p>£10</p>
	          <p><button class="button">Add to Basket</button></p>
	        </div>
	      </div>
	    </div>
	  </div>
    <script>

    </script>
  </body>
</html>
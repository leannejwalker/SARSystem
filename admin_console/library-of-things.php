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
$singleRow = mysqli_fetch_assoc($result);


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
  background: rgba(255, 255, 255, 0.9);
}

.container#item {
  padding: 0 22px;
  text-align: center;
  background: rgba(255, 255, 255, 0.9);
}

.container#item::after, .row::after {
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

#img{
  float: none;
  position: none;
  block-size: auto;
  padding: 0px;
  margin-left: 0px;
  margin-right:0px;
  width:100%
}
  </style>

  <body>
  <?php include "header.php"?>
  <?php
    foreach($result as $report) {
  ?>
  <div class="row">
	  <div class="vis-products ns 1">
	    <div class="column">
	      <div class="card">
	        <!--<img src="<?php echo $report['item_picture']; ?>" id="img">-->
	        <div class="container" id="item">
	          <h2><?php echo $report['item_name']; ?></h2>
	          <p class="title"><?php echo $report['fee']; ?> per 7 days</p>
	          <p><?php echo $report['item_category']; ?>/<?php echo $report['sub_category']; ?>/<?php echo $report['item_code']; ?></p>
	          <p><?php echo $report['item_location']; ?></p>
	          <p><button class="button">Add to Basket</button></p>
	        </div>
	      </div>
	    </div>
    <?php
    }
    ?>
    <script>

    </script>
  </body>
</html>
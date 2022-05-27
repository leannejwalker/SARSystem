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
      <title>Book a Repair - Share and Repair</title>
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
    <form action="insert.php" method="post">

      Item Category: <input type="text" name = "category" /><br/>
      Item Name: <input type="text" name = "itemname" /><br/>
      Make: <input type="text" name = "make" /><br/>
      Model: <input type="text" name = "model" /><br/>
      Age: <input type="text" name = "age" /><br/>
      Cost of Item: <input type="text" name = "cost" /><br/>
      Details of fault: <input type="text" name = "dof" /><br/>
      Is the item out of warranty?: <input type="text" name = "warranty" /><br/>
      Has the item been repaired before?: <input type="text" name = "prevrepair" /><br/>
      <input type="submit" />
    </form>
  </div>
    <script>
      var date = new Date();
      date.setDate(date.getDate() - 13);

      console.log(date);
    </script>
  </body>
</html>
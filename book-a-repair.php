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
  </style>

  <body>
  <?php include "header.php"?>
  <form action="insert.php" method="post">
    Value1: <input type="text" name = "field1" /><br/>
    Value2: <input type="text" name = "field2" /><br/>
    Value3: <input type="text" name = "field3" /><br/>
    Value4: <input type="text" name = "field4" /><br/>
    Value5: <input type="text" name = "field5" /><br/>
    
    <input type="submit" />
  </form>
    
    <script>
      var date = new Date();
      date.setDate(date.getDate() - 13);

      console.log(date);
    </script>
  </body>
</html>
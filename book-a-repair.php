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
      <link rel="icon" type="image/x-icon" href="img/favicon.ico">
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
    <form action="new_repair.php" method="post">
      Item Category: <select id="category" name="category">
        <option>===SELECT AN OPTION===</option>
        <option value="aac">Art, Antiques and Collectables</option>
        <option value="faa">Fashion and Accessories</option>
        <option value="elec">Electronics</option>
        <option value="homeapp">Home Appliances</option>
        <option value="tag">Toys and Games</option>
        <option value="oag">Outdoor and Garden</option>
        <option value="other">Other</option>
      </select><br/>
      Item Name: <input type="text" name = "itemname" /><br/>
      Make: <input type="text" name = "make" /><br/>
      Model: <input type="text" name = "model" /><br/>
      Age: <select id="age" name="age">
        <option>===SELECT AN OPTION===</option>
        <option value="new">Under 1 year</option>
        <option value="young">Between 1-2 years</option>
        <option value="used">Between 3-5 years</option>
        <option value="old">Between 6-10 years</option>
        <option value="older">Between 11-20 years</option>
        <option value="vold">Over 21 years</option>
      </select><br/>
      Cost of Item: <select id="cost" name="cost">
        <option>===SELECT AN OPTION===</option>
        <option value="free">Under £5</option>
        <option value="cheap">Between £5-£10</option>
        <option value="mid">Between £10-£50</option>
        <option value="expensive">Between £50-£100</option>
        <option value="a lot">Over £100</option>
      </select><br/>
      Details of fault: <input type="text" name = "dof" /><br/>
      Is the item out of warranty?: <select id="oow" name="oow">
        <option>===SELECT AN OPTION===</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select><br/>
      Has the item been repaired before?: <select id="prevrepair" name="prevrepair">
        <option>===SELECT AN OPTION===</option>
        <option value="yessar">Yes, with Share and Repair</option>
        <option value="yes">Yes, elsewhere</option>
        <option value="no">No</option>
      </select><br/>
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
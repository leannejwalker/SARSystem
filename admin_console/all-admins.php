<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

$sql = ("SELECT * FROM users WHERE access_id=2");
$result = mysqli_query($link, $sql);
$singleRow = mysqli_fetch_assoc($result);
// print_r($singleRow);
// print_r($result);
// print_r($userid);

?>
<!DOCTYPE html>
<html lang="en">
<script language="JavaScript" type="text/javascript" src="/js/jquery-3.6.0.js"></script>
<head>
  <meta charset="UTF-8">
  <title>All Administrators - Share and Repair</title>
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
      background: rgba(255, 255, 255, 0.9);
    }
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    margin-left: -4.5em;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }
</style>
<body>
    <?php include "header.php"?>
    <div class="main">
      <table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th></th>
        </tr>
        <?php
          foreach($result as $report) {
        ?>
        <tr>
          <td><?php echo $report['fname']; ?></td>
          <td><?php echo $report['lname']; ?></td>
          <td><?php echo $report['username']; ?></td>
          <td><a href="">More Details</a></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>
</body>
</html>
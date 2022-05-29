<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

$sql ("SELECT users.id, repair.userid
FROM users
CROSS JOIN repairs
ON users.id=repair.userid;
SELECT * FROM repairs WHERE $userid='" . ($_SESSION['username']) . "'"); // Fetch data from the table customers using their session ID.
$result=mysqli_query($link,$sql);
$singleRow = mysqli_fetch_assoc($result);

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
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
  <body>
  <?php include "header.php"?>
  <div class="main">
    <table>
      <tr>
        <th>Item Name</th>
        <th>Age</th>
        <th>Details of Fault</th>
        <th>Status</th>
      </tr>
      <tr>
        <td><?php echo $singleRow['itemname']; ?></td>
        <td><?php echo $singleRow['age']; ?></td>
        <td><?php echo $singleRow['dof']; ?></td>
        <td><?//php echo $singleRow['status']; ?></td>
      </tr>
    </table>
  </div>
  <script>

  </script>
  </body>
</html>
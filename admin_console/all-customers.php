<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

$sql = ("SELECT * FROM users WHERE access_id=0");
$result = mysqli_query($link, $sql);
$singleRow = mysqli_fetch_assoc($result);
// print_r($singleRow);
// print_r($result);
// print_r($userid);

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<head>
  <meta charset="UTF-8">
  <title>All Customers - Share and Repair</title>
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <script>
    $(document).ready(function () {
      $('#custtable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'scripts/serversideusers.php',
      });
     });
  </script>
</head>
<style>
  /* body {
    background-image: url('img/background.jpg');
    overflow: auto;
  }
  .main{
    border: 0.1em solid #ffffff;
    margin: 5em;
    padding-bottom: 3em;
    padding-left: 5em;
    border-radius: 1em;
    background: rgba(255, 255, 255, 0.9);
  }
  
  img{
    float: left;
    position: relative;
    block-size: 3em;
    margin-left: 18px;
    margin-right:24px;
  }

  .navbar {
    overflow: hidden;
    background-color: rgb(0, 0, 0);
    padding: -1em;
  } */

</style>
<body>
    <?php include "header.php"?>
      <table id="custtable" class="display" style="width:100%">
        <thread>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>More</th>
          </tr>
        </thread>
      </table>
  </body>
</html>
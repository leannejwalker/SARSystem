<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

/*$sql("SELECT users.id, repair.userid
FROM users
CROSS JOIN repairs
ON users.id=repair.userid
;")*/

$sql = ("SELECT * FROM repairs WHERE $userid='" . mysql_real_escape_string($_SESSION['username']) . "'"); // Fetch data from the table customers using their session ID.
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
  <div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               Get Data From Database in PHP Using Id
              </div>
              <div class="card-body">
                <b>Item name</b> :- <span class="card-text"><?php echo $singleRow['itemname']; ?> </span><br>
                <b>Age</b> :- <span class="card-text"><?php echo $singleRow['age']; ?></span><br>
                <b>Details of fault</b> :- <span class="card-text"> <?php echo $singleRow['dof']; ?></span><br>
              </div>
            </div>
        </div>
    </div>        
</div>



















   <!-- <table>
      <tr>
        <th>Item Name</th>
        <th>Age</th>
        <th>Details of Fault</th>
        <th>Status</th>
      </tr>
      <tr>
        <td><?php echo $row['itemname']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['dof']; ?></td>
        <td><?php echo $row['status']; ?></td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>-->
  </div>


  
    <script>

    </script>
  </body>
</html>
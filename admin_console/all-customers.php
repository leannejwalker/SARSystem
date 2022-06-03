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
<script language="JavaScript" type="text/javascript" src="/js/jquery-3.6.0.js"></script>
<head>
  <meta charset="UTF-8">
  <title>All Customers - Share and Repair</title>
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

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }
    a#myBtn{
      color: -webkit-link;
      cursor: pointer;
      text-decoration: underline;
    }
    /* Modal Body */
    .modal-body {padding: 2px 16px;}

    /* Modal Footer */
    .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @keyframes animatetop {
      from {top: -300px; opacity: 0}
      to {top: 0; opacity: 1}
    }
</style>
<body>
    <?php include "header.php"?>
    <div class="main">
      <table>
        <tr>
          <th>Username</th>
          <th>Email Address</th>
          <th>Phone Number</th>
          <th></th>
        </tr>
        <?php
          foreach($result as $report) {
        ?>
        <tr>
          <td><?php echo $report['username']; ?></td>
          <td><?php echo $report['email']; ?></td>
          <td><?php echo $report['phone']; ?></td>
          <td><a id="myBtn" >More Details</a></td>
        </tr>
        <?php
          }
        ?>
        </table>
      </div>
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Modal Header</h2>
        </div>
        <div class="modal-body">
          <p>Some text in the Modal Body</p>
          <p>Some other text...</p>
        </div>
        <div class="modal-footer">
          <h3>Modal Footer</h3>
        </div>
      </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
  </body>
</html>
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
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 3px solid #ddd;
    margin-left: -4.5em;
  }

  th, td {
    text-align: left;
    padding: 16px;
  }

  tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  
  #myInput {
    background-image: url('/css/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }
     /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    border-radius: 1em;
  }
    /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    border: 0.5em solid #F36F21;
    width: 80%; /* Could be more or less, depending on screen size */
    border-radius: 1em;
  }

  /* The Close Button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    padding: 1em;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  /* body.modal-content {
  overflow-y: hidden;
  } */

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
  }

</style>
<body>
    <?php include "header.php"?>
    <div class="main">
    <input type="text" id="search" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <table id="custtable">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th><!--Access type later on when merge-->
          <th></th>
        </tr>
        <?php
          foreach($result as $report) {
        ?>
        <tr>
          <td><?php echo $report['fname']; ?></td>
          <td><?php echo $report['lname']; ?></td>
          <td><?php echo $report['username']; ?></td><!--Access type later on when merge-->
          <td><button id="moredetails">More Details</button></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>

    <div id="detailsmodal" class="modal">
      <div class="modal-content">
        <div class="navbar">
          <img href="https://shareandrepair.org.uk" src="img/sar.png" alt="Share and Repair">
          <span class="close">&times;</span>
        </div>
        <p>Some text in the Modal..</p>
      </div>
    </div>

    <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("custtable");
        tr = table.getElementsByTagName("tr");
        for (i = 1, 2, 3; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1, 2, 3];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
      // Get the modal
      var modal = document.getElementById("detailsmodal");

      // Get the button that opens the modal
      var btn = document.getElementById("moredetails");

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
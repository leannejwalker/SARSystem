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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
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
      <table id="custtable">
        <thread>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th></th>
          </tr>
        </thread>
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
      $(document).ready(function () {
          $('#custtable').DataTable({
              processing: true,
              serverSide: true,
              ajax: 'scripts/serversideusers.php',
          });
      });

      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("custtable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
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

      // When the user clicks on the button, open the modal
      function openModal(user) {
        modal.style.display = "block";
      }

      // Get the modal
      var modal = document.getElementById("detailsmodal");

      // Get the button that opens the modal
      var btn = document.getElementById("moredetails");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];


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
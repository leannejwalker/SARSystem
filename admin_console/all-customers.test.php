
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
<meta charset="UTF-8">
<title>All Customers - Share and Repair</title>
<link rel="icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script language="JavaScript" type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#custtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'scripts/serversideusers.php',
    });
  });
  </script>
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
</html>
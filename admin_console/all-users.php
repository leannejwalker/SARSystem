
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script language="JavaScript" type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#users').DataTable({
      processing: true,
      serverSide: true,
      ajax: 'scripts/users.php',
      dom: 'Bfrtip',
      buttons: [
        {
            extend: 'csvHtml5',
            text: 'Copy all data',
            exportOptions: {
                modifier: {
                    search: 'none'
                }
            }
        }
      ]
    });
  });
</script>
<style>
  body {
    background-image: url('img/background.jpg');
    overflow: auto;
  }
  .main{
    border: 0.1em solid #ffffff;
    margin: 5em;
    padding: 1.5em;
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
<table id="users" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Access Type</th>
            </tr>
        </thead>
    </table>
</div>
<body>
</html>
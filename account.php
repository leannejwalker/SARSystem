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
      <title>Your Account - Share and Repair</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    #accountdetails {
      width: 300px;
      border: 15px #F36F21;
      padding: 50px;
      margin: 20px;
    }
  </style>

  <body>
    <?php include "header.php"?>
    <div class="main">
        <div id="accountdetails"> 
          <h2> Your Account </h2>
            <h3> Update your Personal Details</h3>
            <div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['password']?></td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><?=$_SESSION['email']?></td>
					</tr>
				</table>
		  	</div>
            <h3> Privacy and Security</h3>
        </div>
  </div>
  <?php include "footer.php"?>
    <script>

    </script>
  </body>
</html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/059448ac20.js" crossorigin="anonymous"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  -ms-overflow-style: none;
  scrollbar-width: none; 

}

body::-webkit-scrollbar {
  display: none;
}

img{
  float: left;
  position: relative;
  block-size: 3em;
  padding: 8px;
  margin-left: 18px;
  margin-right:24px;
}

.navbar {
  overflow: hidden;
  background-color: rgb(0, 0, 0);
  text-align: left;
}

.subnav#user {
  float: right;
  text-align: left;
  display: block;
}
.subnav-content#user{
  right:0em;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 24px 24px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
  display: block;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 24px 24px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #F36F21;
}

.subnav-content {
  min-width: 120px;
  display: none;
  position: absolute;
  left: 1;
  background-color: rgb(65, 65, 65);
  z-index: 1;
}

.subnav-content a {
  min-width: 120px;
  text-align: left;
  float: left 15px;
  color: white;
  text-decoration: none;
  display: block;
}

.subnav-content a:hover {
  background-color: #F36F21;
  color: white;
}

.subnav:hover .subnav-content {
  display: flex;
  flex-direction: column;
}
h1{
  text-align: left;
  text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
  color: #F36F21;
}
</style>
</head>
<body>
<div class="navbar">
		<img href="https://shareandrepair.org.uk" src="/img/sar.png" alt="Share and Repair">
    <h1>Repair Network</h1>
		<!--<a href="account.php">Account Details</a>-->
		<a href="summary.php"><i class="fa-solid fa-house"></i> Summary </a>

    <div class="subnav">
		  <button class="subnavbtn"><i class="fa-solid fa-circle-user"></i> Users <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
        <a href="my-borrowed-items.php">All Users</a>
				<a href="borrow-an-item.php">Add Users</a>
			</div>
		</div>

    <div class="subnav">
		  <button class="subnavbtn"><i class="fa-solid fa-handshake"></i> Borrow <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
        <a href="my-borrowed-items.php">My Borrowed Items</a>
				<a href="borrow-an-item.php">Borrow an Item</a>
			</div>
		</div>
    
    <div class="subnav">
		  <button class="subnavbtn"><i class="fa-solid fa-wrench"></i> Repair <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
				<a href="my-repair-sessions.php">My Repair Sessions</a>
				<a href="book-a-repair.php">Book a Repair Session</a>
		  </div>
		</div>
    
    <div class="subnav">
		  <button class="subnavbtn"><i class="fa-solid fa-chalkboard-user"></i> How To <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
				<a href="my-booked-howto.php">My Booked HowTos Sessions</a>
				<a href="book-a-howto.php">Book a HowTo Session</a>
			</div>
		</div>

    <div class="subnav">
		  <button class="subnavbtn"><i class="fa-solid fa-circle-info"></i> Help <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
        <a href="faq.php">FAQ</a>
				<a href="support.php">Contact Support</a>
			</div>
		</div>

    <div class="subnav" id="user">
      <button class="subnavbtn"> <?=$_SESSION['username']?> <i class="fa-solid fa-circle-user"></i></button>
			<div class="subnav-content" id="user">
        <a href="account.php">Account Details</a>
				<a href="logout.php">Log Out</a>
			</div>
    </div>
</div>
</body>
</html>
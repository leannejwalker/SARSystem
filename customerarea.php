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
      <title>Customer Area - Share and Repair</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    /* Fixed sidenav, full height */
    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #818181;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color: #f1f1f1;
    }

    /* Main content */
    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
      background-color: green;
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: #262626;
      padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }

    /* Some media queries for responsiveness */
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    
    div.toggle{
      display: none;
    }
  </style>

  <body>
    <div class="sidenav">
      <a class = "trigger" href="#accountdetails">Your Account</a>
      <button class="dropdown-btn">Repair Sessions
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class = "trigger" href="#repairsessions">Your Repair Sessions</a>
        <a class = "trigger" href="#bookarepair">Book a Repair Session</a>
      </div>

      <button class="dropdown-btn">Item Rentals
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class = "trigger" href="#yourrentals">Your Rentals</a>
        <a class = "trigger" href="#rentanitem">Rent an Item</a>
      </div>
      
      <button class="dropdown-btn">Events
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class = "trigger" href="#yourevents">Your Booked Events</a>
        <a class = "trigger" href="#bookanevent">Book an Event</a>
      </div>
      <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </div>

    <div class="main">
        <div class="toggle" id="accountdetails"> 
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
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
                <?php include 'reset-password.php';?>
            <h3> Privacy and Security</h3>
        </div>
        <div class="toggle" id="repairsessions"> 
          <h2> Your Repair Sessions </h2>
        </div>
        <div class="toggle" id="bookarepair"> 
          <h2> Book a Repair Session </h2>
        </div>
        <div class="toggle" id="yourrentals"> 
          <h2> Your Rentals </h2>
        </div>
        <div class="toggle" id="rentanitem"> 
          <h2> Rent an Item </h2>
        </div>
        <div class="toggle" id="yourevents"> 
          <h2> Your Booked Events </h2>
        </div>
        <div class="toggle" id="bookanevent"> 
          <h2> Book an Event </h2>
        </div>
  </div>
    <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
      $("a").click(function(){
      var myelement = $(this).attr("href")
        $(myelement).slideToggle("fast");
        $(".toggle:visible").not(myelement).hide();
      });
    </script>
  </body>
</html>


<!--<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>


<h1> Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>-->
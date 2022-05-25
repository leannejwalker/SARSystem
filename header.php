<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        overflow: hidden;
        background-color: #333;
        font-family: Arial;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit; /* Important for vertical align on mobile phones */
        margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<div class="navbar">
		<img src="img/sar.png" alt="Share and Repair">
		<a href="account.php">Account Details</a>
		
        <div class="subnav">
		  <button class="subnavbtn">Borrow<i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
                <a href="my-borrowed-items.php">My Borrowed Items</a>
				<a href="borrow-an-item.php">Borrow an Item</a>
			</div>
		</div>
        <div class="subnav">
		  <button class="subnavbtn">Repair<i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
				<a href="my-repair-sessions.php">My Repair Sessions</a>
				<a href="book-a-repair.php">Book a Repair Session</a>
			</div>
		</div>
        <div class="subnav">
		  <button class="subnavbtn">How To<i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
				<a href="my-booked-howto.php">My Booked HowTos Sessions</a>
				<a href="book-a-howto.php">Book a HowTo Session</a>
			</div>
		</div>
        <div class="subnav">
		  <button class="subnavbtn">Help<i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
                <a href="faq.php">FAQ</a>
				<a href="support.php">Contact Support</a>
			</div>
		</div>

		<a href="faq.php">FAQ</a>


		<a class="fa" id="cart">&#xf07a;</a>
		&#xf2bd;
	</div>
</html>
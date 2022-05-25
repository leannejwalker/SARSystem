<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* The navigation menu */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navigation links */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The subnavigation menu */
.subnav {
  float: left;
  overflow: hidden;
}

/* Subnav button */
.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Add a red background color to navigation links on hover */
.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

/* Style the subnav content - positioned absolute */
.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

/* Style the subnav links */
.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

/* Add a grey background color on hover */
.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

/* When you move the mouse over the subnav container, open the subnav content */
.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>
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
</div>

</body>
</html>
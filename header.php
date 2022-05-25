<!DOCTYPE html>
<html lang="en">
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
<div class="navbar">
		<img src="img/tmb.png" alt="The Mighty Blob">
		<a href="index.html">Home</a>
		<div class="subnav">
		  <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
			<div class="subnav-content">
				<a href="company.html">About The Mighty Blob</a>
				<a href="faq.html">FAQs</a>
			</div>
		</div> 
		<a href="repair.html">Repair</a>
		<a href="shop.html">Shop</a>


		<a href="contact.html">Contact</a>



		<a class="fa" id="cart">&#xf07a;</a>
		&#xf2bd;
	</div>
</html>
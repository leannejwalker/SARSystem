<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
<<<<<<< HEAD:logout.php
header("location: login.php");
=======
header("location: /index.php");
>>>>>>> 9b83225d5fdf0597e3721657d108934744c689bf:src/auth/logout.php
exit;
?>
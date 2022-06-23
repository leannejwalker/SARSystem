<?php

// Login Page
ob_start();
include "./scripts/css.php";
include "./scripts/js.php";
include "./src/misc/simple-header.php";
include "./src/auth/login.php";
header("Refresh:0");
$loginpage = ob_get_contents(); ob_end_clean();

//Logged In
ob_start();
include "./src/misc/header.php";
include "./src/misc/account.php";
include "./src/misc/footer.php";
header("Refresh:0");
$loggedin = ob_get_contents(); ob_end_clean();

?>
 
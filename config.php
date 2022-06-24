<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '10.9.9.19:3306');
<<<<<<< HEAD:config.php
define('DB_USERNAME', 'sarwebsite');
define('DB_PASSWORD', '3@jDlb89g4d4*As7');
define('DB_NAME', 'sarwebsite');
=======
define('DB_USERNAME', 'devsaruser');
define('DB_PASSWORD', 'Tv9y5h3&');
define('DB_NAME', 'devsar');
>>>>>>> 9b83225d5fdf0597e3721657d108934744c689bf:scripts/config.php

/*$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";*/
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
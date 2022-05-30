<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

$sql("SELECT id, username FROM users
CROSS JOIN repairs
WHERE users.id=repair.userid;
UNION SELECT itemname, age, dof  FROM repairs WHERE $userid='" . ($_SESSION['username']) . "'");

$stmt = $link->prepare($sql);
$stmt->bind_param("$id", "$userid");
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
$result->fetch_assoc();*/

/*$queries = [
  "SELECT users.id, repair.userid
  FROM users
  CROSS JOIN repairs
  ON users.id=repair.userid",
  "SELECT * FROM repairs WHERE $userid='" . ($_SESSION['username']) . "'"
];

// Execute the multiple SQL queries
foreach ($queries as $query) {
  $stmt = $link->prepare($query);
  $stmt->execute($query);
  $stmt->close();
}

if ($stmt->affected_rows === 1) {
  echo "Data found successfully";
} else { // The user accessed the script directly

// Kill the script.
echo "No data found";
mysqli_close($link);

}*/

/*$sql ("SELECT users.id, repair.userid
FROM users
CROSS JOIN repairs
ON users.id=repair.userid;
SELECT * FROM repairs WHERE $userid='" . ($_SESSION['username']) . "'"); // Fetch data from the table customers using their session ID.
$result=mysqli_query($link,$sql);
$singleRow = mysqli_fetch_assoc($result);


if ($link->multi_query($sql) === TRUE) {
  echo "Data found successfully";
} else { // The user accessed the script directly

// Kill the script.
echo "Data cannot be found";
exit();
}*/

?>
<!DOCTYPE html>
<html lang="en">
<script language="JavaScript" type="text/javascript" src="/js/jquery-3.6.0.js"></script>
<head>
  <meta charset="UTF-8">
  <title>My Repair Sessions - Share and Repair</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  body {
    background-image: url('img/background.jpg');
  }
  .main{
      border: 0.1em solid #ffffff;
      margin: 5em;
      padding-bottom: 3em;
      padding-left: 5em;
      border-radius: 1em;
      background: rgba(255, 255, 255, 0.7);
    }
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
</style>
<body>
    <?php include "header.php"?>
    <div class="main">
      <table>
        <tr>
          <th>Item Name</th>
          <th>Age</th>
          <th>Details of Fault</th>
          <th>Status</th>
        </tr>
        <tr>
          <td><?php echo $result['itemname']; ?></td>
          <td><?php echo $result['age']; ?></td>
          <td><?php echo $result['dof']; ?></td>
          <td><?//php echo $singleRow['status']; ?></td>
        </tr>
      </table>
    </div>
</body>
</html>
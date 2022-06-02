<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Your Account - Share and Repair</title>
      <link rel="icon" type="image/x-icon" href="img/favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script language="JavaScript" type="text/javascript" src="/js/jquery-3.6.0.js"></script>
    </head>
  <style>
    .main#together{
      margin: 1em;
            padding: 2em;
            border-radius: 1em;
      border-radius: 1em;
    }
    .main#orange{
      border: 0.5em solid #F36F21;
      margin: 1em;
      padding-left: 1em;
      padding-bottom: 1em;
      border-radius: 1em;
      background: rgba(255, 255, 255, 0.9);
    }
    .main#purple{
      border: 0.5em solid #3A3684;
      margin: 1em;
      padding-left: 1em;
      padding-bottom: 1em;
      border-radius: 1em;
      background: rgba(255, 255, 255, 0.9);
    }
    body {
        background-image: url('img/background.jpg');
    }
    h1{
        text-align: left;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        color: #F36F21;
    }
    label{
        font-weight: bold;

    }
  </style>
  <body>
    <?php include "header.php"?>
    <div class ="main" id="together">
        <div class="main" id="purple">
            <div> 
                <h1>Your Share and Repair Account</h1>
                <p>Welcome to your Share and Repair account. If you are new, and would like a guide through the website, please click <a href="shareandrepairguide.pdf" target="_blank" rel="noopener noreferrer"><b>here</b></a></p>
            </div>
        </div>
        <div class="main" id="orange">
            <div> 
                <h3>Account Overview</h3>
                <div class="form-group">
                    <label>Username</label><br>
                    <input type="text" name="username" class="form-control" value="<?=$_SESSION['username']?>">
                </div>
                <div class="form-group">
                    <br><label>Email</label><br>
                    <input type="text" name="email" class="form-control" value="<?=$_SESSION['email']?>">
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <br><label>New Password</label><br>
                        <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                        <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <br><label>Confirm Password</label><br>
                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a class="btn btn-link ml-2" href="account.php">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="main" id="purple">
            <div> 
                <h3>Membership</h3>
            </div>
        </div>
        <div class="main" id="orange">
        <div> 
            <h3>Privacy and Security</h3>
        </div>
    </div>
    <?php include "footer.php"?>
    <script>

    </script>
  </body>
</html>
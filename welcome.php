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
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ background-color: rgba(255,0,255,0.2); 
            font: 14px sans-serif; text-align: center; 
              background: rgb(238,174,202);
              background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
                }
    </style>
</head>
<body>
    <div class="page-header">
        <!-- <marquee behavior="scroll" direction="right" scrollamount="12"><font size="8">Welcome!!!!</font></marquee><br><br> -->
    <!--  <marquee behavior="scroll" direction="right" scrollamount="12"><h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</font></marquee></h1> -->
     <marquee behavior="scroll" direction="right" scrollamount="12"><h1>_/\_WELCOME _/\_</h1></marquee><br>
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

    </div>
    <p>
        <a href="firstpage.html"><h2><b>Click here to acess the Main Page!!</b></h2></a><br><br>
        <!-- <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br> -->
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>

        
    </p>
</body>
</html>
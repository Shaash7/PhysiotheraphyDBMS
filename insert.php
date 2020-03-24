<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$link = mysqli_connect("localhost", "root", "", "physio");

require_once "config.php";
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST['firstname']) && ($_POST['lastname'])==true){
    //echo $_POST['firstname'] ;
    //echo $_POST['lastname'] ;   
   // echo $_POST['email'] ;   

$firstname = mysqli_real_escape_string($link, $_POST['firstname']);          
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);    }
$email = mysqli_real_escape_string($link, $_POST['email']);                  

$sql = "INSERT INTO bookapt (firstname, lastname, email) VALUES ('$firstname','$lastname', '$email')";
if(mysqli_query($link, $sql)) {
   echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>









































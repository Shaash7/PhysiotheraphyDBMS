<?php
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])):
    $firstname =  $_POST['firstname'];          
    $lastname =  $_POST['lastname'];  
    $dateofbirth= $_POST['dob'];  
    $email = $_POST['email'];  

    $link = new mysqli('localhost','root','','physio');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
    $sql = "INSERT INTO bookapt (firstname, lastname, dob, email) VALUES ('".$firstname."','".$lastname."','".$dateofbirth."','".$email."')";
    $result = $link->query($sql); 
    if($result > 0):
      //  echo 'Records added successfully.';
    include('paymentnow.html');
    else:
        echo 'ERROR: Could not able to execute $sql.';
    endif;
    $link->close();
    die();
    endif; 
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Appointment</title><br><br>
	<!-- <link rel="stylesheet" type="text/css" href="appt.css"> -->
	<marquee behavior="scroll" direction="right" scrollamount="12"><font size="8">Welcome!!!</font></marquee><br>
    <font size="8"><p style="text-align: center;">Book an appointment here!!!</p></font>
    <style type="text/css">
          body{/*background: rgb(34,193,195);
              background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(249,206,115,1) 100%)*/
                 background-color: #FEE140;
                  background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
}
    </style>
</head>
<body>
<form action="appointment.php" method="post">
	<div>
        
	<font size="5"><p style="text-align:center;"><label for="first_name">First Name:</p></label></font>
		<font size="5"><p style="text-align:center;"><input type="text" name="firstname" id="first_name" placeholder="Firstname" required /></p></font>

		<font size="5"><p style="text-align:center;"><label for="last_name">Last Name:</label></p></font>
		<font size="5"><p style="text-align:center;"><input type="text" name="lastname" id="last_name" placeholder="Lastname" required /></p></font>

    <font size="5"><p style="text-align:center;"><label for="dob">Date of Birth:</label></p></font>
    <font size="5"><p style="text-align:center;"><input type="date" name="dob" id="dob" placeholder="Enter Birthdate" required /></p></font>

	<font size="5"><p style="text-align:center;"><label for="email">Email ID:</label></p></font>
		<font size="5"><p style="text-align:center;"><input type="text" name="email" id="last_name" placeholder="email" required /></p></font>

		<font size="5"><p style="text-align:center;"><input type="submit" value="Submit" /></p></font>
       <font size="5"><p style="text-align:center;"><input type="reset" value="reset" /></p></font><br>
  </div><br>


   <marquee behavior="scroll" direction="left" scrollamount="12"><font size="6">In the midst of these hard times it is our good health and good sleep that are enjoyable</font></marquee><br><br>         


 <!--   <a href="payment.html"><font size="6"><p style="text-align:center;">Click Here for Payment</p></font></a> -->




</form>

</body>
</html>






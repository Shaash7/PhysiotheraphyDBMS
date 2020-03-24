<?php 
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phno']) && isset($_POST['message'])):
    $name =  $_POST['name'];          
    $email =  $_POST['email'];    
    $phno =  $_POST['phno'];  
    $message = $_POST['message'];  
      $link = new mysqli('localhost','root','','physio');
    if($link->connect_error)
        die('connection error: '.$link->connect_error);
    $sql3 = "INSERT INTO ctact (name,email,phno,message) VALUES ('".$name."','".$email."','".$phno."','".$message."')";
    $result = $link->query($sql3); 
    if($result > 0):
      // echo 'Done!!!.';
    	include('redcon.html');
    else:
        echo 'ERROR: Could not able to execute $sql.';
    endif;
    $link->close();
    die();
    endif; 

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
  <style type="text/css">
    body{
            background-color: #08AEEA;
            background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
);

    }
  </style>
</head>
<body>
<p style="text-align:center;"><font size="9">Contact Us</font></p><br><br>
<marquee behavior="scroll" direction="right" scrollamount="12"><font size="6">Contact us today and we will get back to you in 24hrs</font></marquee><br><br>
     
     <form action="ct.php"  method="post">
      

      <font size="5"><p style="text-align:center;">Name:<input type="text" name="name"></p></font>
		<font size="5"><p style="text-align:center;">Email:<input type="text" name="email"></p></font>
		<font size="5"><p style="text-align:center;">PhoneNo:<input type="number" name="phno"></p></font>
		<font size="5"><p style="text-align:center;">Message:<input type="text" name="message"></p></font>
      
      <!-- </div>
      <div class="row">
        <div class="button"> -->
          <p style="text-align:center;"><button type="submit">Submit</button></p>
          <p style="text-align:center;"><button type="reset">reset</button></p>
       
      
    </form>
  

	
</body>
</body>
</html>
<?php 
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])):
    $name =  $_POST['name'];          
    $email =  $_POST['email'];    
    $message = $_POST['message'];  
   
    $link = new mysqli('localhost','root','','physio');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
    $sql3 = "INSERT INTO feedback (name,email,message) VALUES ('".$name."','".$email."','".$message."')";
    $solution = $link->query($sql3); 
    if($solution > 0):
       //echo 'Feedback added successfully.';
    	include('redirect.html');
    else:
        echo 'ERROR: Could not able to execute $sql.';
    endif;
    $link->close();
    die();
    endif; 

?>



<html>
<head>
	<title>Feedback Form</title>
   <br><marquee behavior="scroll" direction="right" scrollamount="12"><font size="7">You can't take good health for granted--Jack Osborne</font></marquee><br><br><br>         

	<style type="text/css">
   body{
          background-color: #FAACA8;
          background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);

   }

  </style>
</head>
<body>

 <br><font size="9"><p style="text-align:center;">WebSite Feedback Form</h1></p></font>
     
     <form action="fback.php"  method="post">
      

      <font size="6"><p style="text-align:center;">name:<input type="text" name="name"></p></font>
		<font size="6"><p style="text-align:center;">email:<input type="text" name="email"></p></font>
		<font size="6"><p style="text-align:center;">message:<input type="text" name="message"></p></font>
      
      <!-- </div>
      <div class="row">
        <div class="button"> -->
          <p style="text-align:center;"><button type="submit">Submit</button></p><br><br><br>

        
          <marquee behavior="scroll" direction="left" scrollamount="12"><font size="7">Time and health are two precious assets that we don't recognize and appreciate until they have been depleted---Denis Waitley</font></marquee><br><br>


       
      
    </form>
  

	
</body>
</html>
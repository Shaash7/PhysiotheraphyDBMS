<?php
    if(isset($_POST['cardtype']) && isset($_POST['choldername']) && isset($_POST['cardno']) && isset($_POST['expirydate']) && isset($_POST['cvv']) && isset($_POST['amount'])):
    $cardtype =  $_POST['cardtype'];          
    $choldername =  $_POST['choldername'];    
    $cardno = $_POST['cardno'];  
    $expirydate = $_POST['expirydate'];
    $cvv = $_POST['cvv']; 
    $amount = $_POST['amount']; 
    $link = new mysqli('localhost','root','','physio');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
    $sql3 = "INSERT INTO payment (cardtype, choldername, cardno, expirydate, cvv, amount) VALUES ('".$cardtype."','".$choldername."','".$cardno."','".$expirydate."','".$cvv."','".$amount."')";
    $result = $link->query($sql3); 
    if($result > 0):
       // echo "Records added successfully./n";
        //echo "Thank you for making payment/n";
        //echo 'Click here for the feedback';
        include('payfb.html');
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
    <title>Payment</title>
   <!--  <link rel="stylesheet" type="text/css" href="pays.css">-->
    <h1><p style="text-align:center;"><font size="9">Payment</font></p></h1>
    <style type="text/css">
          body{background-color: #FEE140;
                background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
}
    </style>
</head>
<body>
    
    <marquee behavior="scroll" direction="right" scrollamount="12"><font size="8">Welcome</font></marquee><br><br>
    <form action="paymmm.php" method="post">

    
                 
        <font size="5"><p style="text-align:center;">CardType:<input type="text" name="cardtype"></p></font>
        <font size="5"><p style="text-align:center;">CholderName:<input type="text" name="choldername"></p></font>
        <font size="5"><p style="text-align:center;">cardno:<input type="number" name="cardno"></p></font>
        <font size="5"><p style="text-align:center;">Expirydate:<input type="date" name="expirydate"></p></font>
        <font size="5"><p style="text-align:center;">CvvNo:<input type="number" name="cvv"></p></font>
        <font size="5"><p style="text-align:center;">Amount:<input type="number" name="amount"></p><br></font>
<!--         <select>
  <option value="volvo" name="cardname">Volvo</option>
  <option value="saab" name>Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> -->

        <p style="text-align:center;"><input type="submit" name="submit" value="submit" /><br>
            <p style="text-align:center;"><input type="reset" name="submit" value="reset" /><br><br>

                 <marquee behavior="scroll" direction="left" scrollamount="12"><font size="6">All the money in the world can't buy you back good health.</font></marquee><br><br>

  </form>

</body>
</html>
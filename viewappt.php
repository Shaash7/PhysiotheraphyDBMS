<!DOCTYPE html>
<html>
<head>
 <title>View Appointment</title>
 <style>
  b{
    font-size: 28px;
    font-family: 'Arial';
    padding: 1px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   border-radius: 14px;
  } 
  th 
  {
   background-color: #54C571;
   color: snow;
   border-radius: 32px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
    border: 9px solid #736AFF;
    border-radius: 17px;
     color: black;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(odd) {background-color: #f2f2; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: #EBF4FA">
  <h1><center><font style="border:9px solid #736AFF"> STORED PROCEDURE /\/ TRIGGER /\/ APPOINTMENT TABLE </font></center></h1>
 <table>
 <tr>
 <th><br>Book ID<br><br></th> 
  <th><br>First Name<br><br></th> 
  <th><br>Last Name<br><br></th>
  <th><br>Date of Birth<br><br></th>
  <th><br>Age<br><br></th>
  <th><br>Email<br><br></th>
  <br><br>
 </tr>
  <?php
$con = mysqli_connect("localhost", "root", "", "physio");
echo " <b><center>Here is the DISPLAY of........</center></b>";
echo " <b><center>Stored Procedure & Trigger....</center></b>";
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "CREATE PROCEDURE GetAge() SELECT *, year(current_date())-year(dob) as age from bookapt";
  mysqli_query($con,$sql);
  echo "<b><center>Procedure & Trigger Created  Successfully.</center></b>";
  echo "<b><center>Calling Stored Procedure & Trigger(UpperCase)!!!</center></b>";
  if ($result = mysqli_query($con,"CALL GetAge()"))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["bookid"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["dob"]. "</td><td>". $row["age"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
    }
else 
  { 
    echo "0 results"; 
  }
$con->close();
?>
</table>
</body>
</html>
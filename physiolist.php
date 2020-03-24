<!DOCTYPE html>
<html>
<head>
 <title>Physiotherapist Display</title>
 <style>
 b{
    font-size: 30px;
    font-family: 'Arial';
    padding: 2px;
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
   background-color: mediumpurple;
   color: white;
   border-radius: 14px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
     color: black;
     border: 9px solid grey;
     border-radius: 17px;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(even) {background-color: #f2f2f2; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey">DISPLAY CONTENTS /\/ PHYSIOTHERAPIST TABLE</font></center></h1>
 <table>
 <tr>
  <th><br>Physio ID<br><br></th> 
  <th><br>Full Name<br><br></th> 
  <th><br>Qualification<br><br></th>
  <th><br>Specilization<br><br></th>
  <th><br>Experiences<br><br></th>
  <br><br>
 </tr>

  <?php
$con = mysqli_connect("localhost", "root", "", "physio");
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "SELECT * from physiotherapist";
  mysqli_query($con,$sql);
  if ($result = mysqli_query($con,$sql))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["physioid"]. "</td><td>" . $row["fullname"]. "</td><td>" . $row["qual"]. "</td><td>" . $row["specs"]. "</td><td>" . $row["exp"]. "<br></br></td></tr>";
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

<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
if($conn->connect_error){
  die ("Connection failed " .$conn->connect_error );
  }   
  $name=$_POST['name'];
  $password=$_POST['password'];
  //$sql = "SELECT * FROM hoangdb.sqltest WHERE name = $use AND password = $password";
  $vcl ="SELECT * FROM hoangdb.sqltest WHERE name AND password";
  echo $vcl;
  $rs= mysqli_query($conn, $vcl);
  $row =  rows($rs);
  if ($row > 0) {
      echo "true";
   } else {
       echo "Fail";  
   }
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="out.php" method="post">
  name:<br>
  <input type="text" name="name">
  <br>
  password:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
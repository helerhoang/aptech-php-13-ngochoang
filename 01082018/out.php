<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
    // print_r($conn);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
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
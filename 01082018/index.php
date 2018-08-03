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
// $sql ="create database hoangDB";
// if($conn->query($sql)===true){
//     echo "Database created successfully";

// }
// else {
//     echo "Error creating database: " . $conn->error;
// }
// $conn->close();
// $sqltable="CREATE TABLE  hoangDB.sqltest(
//     id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name nvarchar(200) not null,
//     password VARCHAR(50),
//     email Varchar(10) unique
// )";

//     if($conn->query($sqltable)===true){
//         echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();
$sql = "INSERT INTO hoangDB.sqltest (id, name,password,email)
VALUES (1,'Hoang', 'hoang','hh@gmail')  
    ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



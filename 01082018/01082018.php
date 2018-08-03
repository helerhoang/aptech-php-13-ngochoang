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
// if($conn->connect_error){
// die ("Connection failed " .$conn->connect_error );
// }
// $sql ="create database hoangDB";
// if($conn->query($sql)===true){
//     echo "Database created successfully";

// }
// else {
//     echo "Error creating database: " . $conn->error;
// }
// $conn->close();
// $sqltable="CREATE TABLE  hoangDB.sqltable(
//     id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     lastname nvarchar(200) not null,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
// )";

//     if($conn->query($sqltable)===true){
//         echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();
    


?>



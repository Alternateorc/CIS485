<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis485";
-//$tablename="user";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//sql to create table
$sql = "CREATE TABLE GUEST ( "
        . "username VARCHAR(30) PRIMARY KEY,"
        . "password VARCHAR(30) NOT NULL,"
              .")";
if ($conn->query($sql)=== TRUE){
    echo "Table MyGuests created successfully";
} else{
    echo "Error creating table: ". $conn->error;
}
$conn->close();

?>
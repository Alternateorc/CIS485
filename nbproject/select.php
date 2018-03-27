<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis485";
//$tablename="user";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "Select username, password FROM user";

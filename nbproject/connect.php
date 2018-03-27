<?php
 $servername = "localhost";
$username = "root";
$password = "root";
//creat connection
$conn = new mysqli($servername, $username, $password);
//check connection
if($conn -> connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
echo "Connected Successfully";
//or print_f
$sql = "create database cis485" ;

if ($conn->query( $sql)=== TRUE){
    echo 'Connection good';
}
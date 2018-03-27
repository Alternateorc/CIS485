<?php
 $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis485";
//creat connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn -> connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
//Copy data from a dump file into the php file to use in the tbale
$sql = "insert into movie()"
        . ""
        
  //      "insert into myguest (firstname, lastname,email)"
  //      . "Vaules('John','doe','john@example.com')"
        ;
        
if($conn->query($sql) === TRUE){
    echo "New record created successfully ";
}else{
    echo"Error: " .$sql ."<br>" .$conn->error;
}
$conn->close();


?>
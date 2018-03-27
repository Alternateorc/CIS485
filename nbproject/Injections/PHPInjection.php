<?php
//basic call of the name and password
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis485";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//sql query to get all data [in variable for php not called to the server]
$sql = "select id, firstname, lastname From MyGuests";
$result = $conn->query($sql); 

if($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "id: " .$row["id"]. " - Name: " . $row["firstname"]." "
    .$row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
/*
if ($conn->query($sql)=== TRUE){
    echo "Table MyGuests created successfully";
} else{
    echo "Error creating table: ". $conn->error;
}
$conn->close();
*/
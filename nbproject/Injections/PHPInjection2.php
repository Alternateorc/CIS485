<?php
//first section to call name and password
//not sure that code is doing 
//many questions
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
if (isset($_GET['username'] ))
$name = unserialize($_GET['username']);
if (isset($_GET['password'] ))
$password = $GET['password'];


if ($stmt = $conn->prepare("SELECT password FROM tble_user WHERE  name=?"))
        {
    //Bind a var to the parameter as a string.
    $stmt->bind_param("s", $name);
    //Execute the statment.
    $stmt->execute();
    //Get the var from the query.
    $stmt->bind_result($pass);
    //Fetch the data
    $stmt->fetch();
    //Display the data.
    printf("Password for user %s is %s\n",  $name, $pass);
    //Close the prepared statment.
    $stmt->close(); 
    
}

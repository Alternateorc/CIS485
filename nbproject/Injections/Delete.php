<?php
//Third section that uses an update query
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis485";
//$tablename="user";
//T
//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error() );
}
/*
$sql = "INSERT INTO myGuests (firstname, lastname, email)"
        . "VALUES ('Jack', 'Black', 'JBlack@gmail.com')";
if (mysqli_query($conn, $sql)){
    echo"New record created successfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
*/

//*
//Before using post or get
if (isset($_GET['username'] ))
$name = $_GET['username'];
if(isset($GET['password']))
$password = $_GET['pasword'];

if ($stmt = $mysqli->prepare("DELETE FROM user WHERE name = ?" ))
{
    
    //Bind the variables to the parameter as strings.
    $stmt->bind_param("s",  $name);
    //Execute the statement.
    $stmt->exectute();
    //Close the prepared statement.
    $stmt->close();
    
}
 
 //*/
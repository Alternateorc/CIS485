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

if ($stmt = $mysqli->prepare("UPDATE user SET password = ? "
. "WHERE name =? " )){
        /*
possible issue the name of the connection mysqli is already used
above it is used under the conn variable to create the connection 
to the database.  Fix: use the $conn variable to call the connection 
 instead of creating another one
 Ask professor.....
*/        
        
    
    //Bind the variables to the parameter as strings.
    $stmt->bind_param("ss", $password, $name);
    //Execute the statement.
    $stmt->exectute();
    //Close the prepared statement.
    $stmt->close();
    
        }
 
 //*/
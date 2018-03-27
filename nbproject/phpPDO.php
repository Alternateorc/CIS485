<?php
$servername = "localhost";
$username = "root";
$password = "root";
try
{    
$conn = new PDO("mysql:host = $servername ",$username, $password);

//set the PDO mode to exception
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully 2/28/2018";
}
catch (PDOException $e)
{echo"Connection Failed" .$e ->getMessage();}

?>
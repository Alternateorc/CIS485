 <?php
$servername = "localhost";
$username = "root";
$password = "empowerd";
$conn = ""        ;
//create connection
$conn =  mysqli_connect($servername, $username, $password);        

//check connection
if (!$conn )
{
    die("Connection Failed".mysqli_connect_error());
    
}
echo "Connected Successfully";
?>
 


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
$sql = 
  " 
select movie.mov_title as Title, movie_genres.gen_id as Genre
from movie 
 join movie_genres
	on movie.mov_id = movie_genres.mov_id
;
  "
 ;
        
if($conn->query($sql) === TRUE){
    echo "New record created successfully ";
}else{
    echo"Error: " .$sql ."<br>" .$conn->error;
}
$conn->close();


?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


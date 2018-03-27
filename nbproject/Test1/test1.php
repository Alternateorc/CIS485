<?php
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
//sql to create table
$sql = 
      
"CREATE TABLE movie (
    mov_id integer NOT NULL,
    mov_title character(50),
    mov_year integer,
    mov_time integer,
    mov_lang character(15),
    mov_dt_rel date,
    mov_rel_country character(5)
)
     

    
CREATE TABLE movie_cast (
    act_id integer NOT NULL,
    mov_id integer NOT NULL,
    role character(30)
   --constraint movie_cast_pk primary key (act_id, mov_id)
)

        
CREATE TABLE movie_direction (
    dir_id integer NOT NULL,
    mov_id integer  NOT NULL
) 
        

CREATE TABLE movie_genres (
    mov_id integer NOT NULL,
    gen_id integer NOT NULL
) 
        

CREATE TABLE actor (
    act_id integer NOT NULL,
    act_fname character(20),
    act_lname character(20),
    act_gender character(1)
)


CREATE TABLE director (
    dir_id integer NOT NULL,
    dir_fname character(20),
    dir_lname character(20)
)




CREATE TABLE rating (
    mov_id integer NOT NULL,
    rev_id integer NOT NULL,
    rev_stars numeric(4,2),
    num_o_ratings integer
)



CREATE TABLE reviewer (
    rev_id integer NOT NULL,
    rev_name character(30)
)
 "
        ;

if ($conn->query($sql)=== TRUE){
    echo "Table movie created successfully";
} else{
    echo "Error creating table: ". $conn->error;
}
$conn->close();

?>

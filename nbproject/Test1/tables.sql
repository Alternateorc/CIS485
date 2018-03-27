
 use cis485;
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
)/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Alt
 * Created: Mar 7, 2018
 */


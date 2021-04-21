<?php

$dbname = "users.db";

$db = new SQLite3($dbname);

if(!$db){
    die("db not create ...");
}

/*else{
    echo "Create database successfully ...";
}*/

//Create table in sqlite DB

$query = "CREATE TABLE IF NOT EXISTS user_table(user_id integer primary key ,
            user_name text , user_mail text)";


$db->exec($query);


?>
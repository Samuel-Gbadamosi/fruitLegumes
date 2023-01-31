<?php

function pdo_connect_mysql(){
// update details below with your mysql details
$DATABASE_HOST = 'localhost';
$DATABASE_USER ='root';
$DATABASE_PASS = 'root';
$DATABSE_NAME  = 'hotel';

try{
    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
}catch(PDOException $exception){
    // if theres an error with the connection, stop the script
    die ('Failed to connect to database!');
}

}




?>
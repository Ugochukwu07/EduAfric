<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'eduafric';

$conn = new mySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){
    die('Database Connection Error: ' . $conn->connect_error );
}
?>
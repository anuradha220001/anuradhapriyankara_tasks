<?php

$servername = "db";
$username = "project1";
$password = "Nadee@1212";
$dbname = "project1";

//creating connection

$conn = new mysqli($servername , $username , $password , $dbname);

//check the connection

if ($conn->connect_error){
    die ("connection failed:" . $conn->connect_error);
    }

?>
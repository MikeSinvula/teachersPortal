<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "teachers";

//Connection being Established
$conn = new mysqli($host,$username,$password,$db_name);

//test if there is connection
if($conn->connect_error){
    die("Connection Failed ". $conn->connect_error);
}

<?php

session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

//If user Actually clicked register button
if(isset($_POST)) {

    //Escape Special Characters In String First
    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    //Encrypt Password
    $password = base64_encode(strrev(md5($password)));






    $sql = "INSERT INTO users(firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";

    if($conn->query($sql)===TRUE){
        $_SESSION['registerCompleted'] = true;
        header("Location: login.php");
        exit();
    }else{
        echo "Error: ". $sql ."<br>" . $conn->error;
    }
}else{
    header("Location: register.php");
    exit();
}
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $database='feedbacktest';
    $mail='';
    $flag=0;
    //Connection
    $conn=new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error) {
        die("<h1>Fatal Connection error</h1>".$conn->connect_error());
    }  
?>
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asmt2nd";
    $con = mysqli_connect($host, $username, $password, $dbname);   
    if(!$con){
        die("connection failed");
    }
    
?>
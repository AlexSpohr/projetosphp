<?php 

    $ServerName = "localhost";
    $dBUsername = "root"; 
    $dBPassword = "";
    $dBName = "loginsystem-03"; 

    $conn = mysqli_connect($ServerName, $dBUsername, $dBPassword, $dBName); 

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error()); 
    }
        

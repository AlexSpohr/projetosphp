<?php 

    $dbhost = "localhost"; 
    $dbuser = "root"; 
    $dbpass = ""; 
    $dbname = "loginsystem-02"; 

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
        die("Erro de conexão");
    } 

?>
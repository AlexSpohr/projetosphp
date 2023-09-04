<?php

    if (isset($_POST['submit'])){

        $username = $_POST['uid'];
        $pwd = $_POST ['pwd'];

        require_once 'dbh.inc.php';
        require_once 'functions.php'; 

        if (emptyInputLogin($username, $pwd) !== false){
            header("location:../login.php?error=emptyinput");
            exit();
        }

    } 
    else {
        header("location:../login.php");
    }
<?php 

    function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) : bool
    { 
        if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
        {
            return true; 
        } 
        return false; 
    }

    function invalidUid($username) : bool 
    { 
        if(!preg_match('/^[a-z]\w{2,23}[^_]$/i', $username)) 
        {
            return true; 
        } 
        return false; 
    }

    /*function invalidEmail($email) : bool
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            return true; 
        } 
        return false;  
        
    }
    */
    function invalidEmail($email) : bool 
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function pwdMatch($pwd, $pwdRepeat) : bool 
    {
        if($pwd !== $pwdRepeat) 
        {
            return true; 
        } 
        return false; 
    }

    function uidExists($conn, $username, $email)
    {
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; 
        $stmt = mysqli_stmt_init($conn); 
        if(!mysqli_stmt_prepare($stmt, $sql)) 
        {
            header("location:../signup.php?error=stmtfailed");
            exit();
        } 
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt); 

        $resultData = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($resultData))
        {
            return $row; 
        } else
        {
            return false; 
        }

        mysqli_stmt_close($stmt); 

    }

    function createUser($conn, $name, $email, $username, $pwd)
    {
        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);"; 
        $stmt = mysqli_stmt_init($conn); 
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:../signup.php?error=stmtfailed");
            exit();
        } 
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd); 
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location:../signup.php?error=none"); 
    }

    function emptyInputLogin($username, $pwd) : bool
    {
        if (empty($username) || empty($pwd))
        {
            return true; 
        } 
        return false; 
    }

    
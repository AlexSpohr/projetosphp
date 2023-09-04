<?php
    session_start();
        include("connections.php");
        include("functions.php");

    $user_data = check_login($con); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu website</title>
</head>
<body>

    <a href="login.php">Logout</a>
    <h1>Essa é a página index</h1>

    Seja bem vindo, <?php echo $user_data['user_name']?>

</body>
</html>
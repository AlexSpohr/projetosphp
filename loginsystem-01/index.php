<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php 
    
    if(!isset($_SESSION ['login'])){

        if(isset($_POST['acao'])){
            $nome = "Alex"; 
            $senha = "123";

            $nomeForm = $_POST['login'];
            $senhaForm = $_POST['senha'];
        
            if($nome == $nomeForm && $senha == $senhaForm){
                //Logado com sucesso!
                $_SESSION['login'] = $nome;
                header('Location: index.php');
            }else{
                //Login inválido!
                echo "Dados inválidos!";
            }
        }
        include ('login.php');
    }else{
        if(isset($_GET['logout'])){
            unset ($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        include ('home.php');
    }
    ?>

</body>
</html>
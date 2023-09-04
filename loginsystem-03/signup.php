<?php
include_once "header.php";
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="include/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="username" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sing Up</button>
        </form>
    </div>

    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Preencha todos os campos</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Escolha um nome de usuário válido</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Escolha um email válido</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Senhas não são iguais</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Nome de usuário ou email já existente</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Erro, tente novamente</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>Você está cadastrado</p>";
        }
    }

    ?>
</section>

<?php
include_once "footer.php";
?>
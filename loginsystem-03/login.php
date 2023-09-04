<?php 
    include_once "header.php";
    ?>
        <section class="signup-form">
            <h2>Log In</h2>
            <form action="include/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>
            <div>
                <?php 
                
                if (isset($_GET["error"])) 
                {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Preencha todos os campos</p>";
                    } else if ($_GET["error"] == "wornglogin") {
                        echo "<p>Senha ou usuário incorreto</p>";
                    } 
                }
                
                ?>
            </div>
        </section>

    <?php 
        include_once "footer.php";
    ?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Martins Imóveis | Login </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="imagens/favicon (1).ico">
    <link rel='stylesheet' type='text/css' media='screen' href='src/main.css'>
    <script src='src/script.js'></script>
</head>
<body>
    <header>

    </header>

        <div class="login-container">
            <img src="imagens/logo.png">
            <form method="POST" action="scripts/aut_login.php">
                <br>
                <label for="text">Usuário:</label>
                <br>
                <input type="text" class="login-input" name="USER" required>
                <br>
                <label for="password">Senha:</label>
                <br>
                <input type="password" class="login-input" name="PASS" required>
                <br>
                <?php 
                    if(isset($_SESSION['error']) && empty($_SESSION['error']) == false){
                        echo   $_SESSION['error'];
                        $_SESSION['error'] = "";
                    }
                ?>
                <br>
                <input type="submit" value="Entrar" id="btn-login">
               
            </form>
        </div>
    <footer>
        <p>Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142</p>
    </footer>
</body>
</html>
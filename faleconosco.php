<?php 
include('scripts/send_mail.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagens/favicon (1).ico">
    <link rel="stylesheet" type="text/css" href="src/faleconosco.css">
    <link rel="stylesheet" type="text/css" href="src/main.css">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <title>Fale conosco - Martin Imóveis </title>
</head>

<body>

    <header>
        <div id="img-banner">
            <img src="imagens/okokok.jpg">
        </div>
        <div id="menu-container">
            <nav>
                <a href="index.php">Iníco</a>
                <a href="casas.php">Casas</a>
                <a href="apartamentos.php">Apartamentos</a>
                <a href="terrenos.php">Terrenos</a>
                <a href="faleconosco.php">Fale conosco</a>
            </nav>
        </div>
    </header>

    <div id="container-conosco">
        <div id="paragrafo">
            <p class="text-normal">A <strong>Martins Imóveis</strong> deseja sempre contar com a sua participação para melhorar ainda mais nosso atendimento. Sempre que precisar, entre em contato conosco para tirar suas mais diversas dúvidas, dar sugestões, fazer reclamações,
                críticas, e até mesmo elogios aos nossos serviços e atendimentos. </p>
                <p class="text-normal">Desejamos com isso poder estar sempre aprimorando nosso atendimento. Nossa equipe terá imensa satisfação em atendê-los.</p>
        </div>

        <div id="texto-email">
            <p id="text-mail"><strong> Mande-nos um e-mail:</strong></p>
            <a href="mailto:martinsimoveis@martinsimoveis.com">martinsimoveis@martinsimoveis.com</a>
            </p>
            <p id="voz"><strong>Canais de Voz:</strong> </p> 
            <p> 2401-2142 | 3462-8101 | 8899-2142 | 8755-2142 </p>

        </div>

        <div id="sua-info">
            <form method="POST" action="scripts/send_mail.php">
                <label>Nome:</label>
                <input type="text" name="name">
                <br>
                <label>E-mail:</label>
                <input type="email" name="email">
                <br> Mensagem:
                <br>
                <textarea style="resize:none" name="msg"></textarea>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <footer id="footer-informacao">
        <p id="diferente">Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142   </p>
    </footer>

</body>

</html>
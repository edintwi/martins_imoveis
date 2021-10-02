<?php 
include('scripts/connection.php');
include('scripts/view.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon (1).ico">
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/visualizar.css">

    <title></title>
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
     
        <div class="container"> 
                <div id="text-container">
                <h1><?php echo $dados['titulo'] ?></h1>
                
                <h2>Descrição: </h2>
                <p><?php echo $dados['descricao'] ?></p>
                <h2>Bairro: <?php echo $dados['bairro'] ?></h2>
                <h2>Valor: R$ <?php echo $dados['valor'] ?></h2>
                <p>Código: <?php echo $dados['id_imoveis'] ?></p>
                <a href="https://api.whatsapp.com/send?phone=5521993576574&text=Ol%C3%A1%2C%20tenha%20interesse%20na%20casa%2Fapartamento%20de%20c%C3%B3digo%3A%20%3C%3Fphp%20echo%20%24imoveis%5B'id_imoveis'%5D%3B%20%3F%3E">Entre em contato</a>
                
                </div>
                <div id="slides">
                    <img src="<?php echo $dados['imagem'] ?>" >
                    <img src="imagens/02.jpg" >
                    <img src="imagens/03.jpg" >
                    <img src="imagens/04.jpg" >
                    <img src="imagens/05.jpg">
                </div>
                <!-- End SlidesJS Required: Start Slides -->
                <!-- SlidesJS Required: Link to jQuery -->
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <!-- End SlidesJS Required -->
                <!-- SlidesJS Required: Link to jquery.slides.js -->
                <script src="src/js/jquery.slides.min.js"></script>
            </div>
        </div>

        <footer id="footer-info">
            <p>Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142 </p>
        </footer>
        <script>
            $(function() {
              $('#slides').slidesjs({
                width: 940,
                height: 528,
                play: {
                  active: true,
                  auto: true,
                  interval: 4000,
                  swap: true
                }
              });
            });
          </script>
</body>
</html>
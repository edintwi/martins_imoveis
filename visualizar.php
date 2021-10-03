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
                <h3> <pre id="pre"><?php echo $dados['descricao']  ?></pre></h3>
                <h2>Bairro: <?php echo $dados['bairro'] ?></h2>
                <h2>Valor: R$ <?php echo number_format($dados['valor'],2,",","."); ?></h2>
                <p>Código: <?php echo $dados['id_imoveis']  ?></p>
                <a href="https://api.whatsapp.com/send?phone=5521988992142&text=Oi%20estou%20interessado%20em%20um%20Ap%2FCasa.">Entre em contato</a>
                
                </div>
                <div id="slides">
                <?php $dir = $dados['diretorio_thumb'];
                    $files = scandir($dir); 
                      
                ?>     
                <?php foreach ($files as $file){ ?>
                    <?php $caminho = $dir."/".$file?>
                    <?php if ($file != '.' && $file != '..'){ ?>
                    <img class="img-bom" src="<?php echo $caminho ?>">    
                <?php }}; ?>    
                </div>

              
                <!-- End SlidesJS Required: Start Slides -->
                <!-- SlidesJS Required: Link to jQuery -->
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <!-- End SlidesJS Required -->
                <!-- SlidesJS Required: Link to jquery.slides.js -->
                <script src="src/js/jquery.slides.min.js"></script>
            </div>
        </div>

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

         
        <footer id="footer_visualizar">
            <p>Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142 </p>
        </footer>

</body>
</html>
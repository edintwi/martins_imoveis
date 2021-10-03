<?php
include('scripts/list_apartamentos.php');
include('scripts/select_all.php');
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/casas.css">
    <link rel="icon" href="imagens/favicon (1).ico">
    <title> Martins Imoveis | Apartamentos </title>
</head>
<body>
    <header>
        <div id="img-banner">
            <img src="imagens/okokok.jpg">
        </div>
        <div id="menu-container">
            <nav>
                <a href="index.php">Início</a>
                <a href="casas.php">Casas</a>
                <a href="apartamentos.php">Apartamentos</a>
                <a href="terrenos.php">Terrenos</a>
                <a href="faleconosco.php">Fale conosco</a>
            </nav>
        </div>
        <div id="filter">
            <form action="">
                <ul>  
                <li>
                    <label> Região: </label>
                    <select name="">
                        <option>Selecione</option>  
                    </select>
                   
                </li>
                <li>
                    <label> Bairro: </label>
                    <select name="bairro-search" id="bairro-search">
                        <option>Selecione</option>
                    </select>
                </li>
                <li>
                    <label> Valor</label>
                    <select name="valor-search" id="valor-search">
                    <option>Selecione</option>
                </select>
                </li>
                <li> 
                    <label> Nº de quartos: </label>
                    <select name="quartos-search" id="quartos-search">
                    <option>Selecione</option>
                    </select></li>
                <li>
                    <input type="submit" value="Buscar">
                </li>    
                </ul>
                
            </form>
        </div>
    </header>
    <div class="container">
    <?php foreach($dados as $imoveis): ?>
        <div class="container-list">
        <section id="list-casas=">
        <p> <strong> <?php echo $imoveis['titulo'] ?> </strong></p>
            <div id="list-img"> <img src=<?php echo $imoveis['imagem'] ?> > </div>
            <br>
            <p> <b>Valor:</b> <?php echo number_format($imoveis['valor'],2,",","."); ?> </p>
            <a href="visualizar.php?id=<?php echo $imoveis['id_imoveis']; ?>" >Visualizar</a>
        </section>
    </div>
    <?php endforeach; ?>    
    <footer id="footer-info">
        <p>Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142</p>
    </footer>
</body>
</html>
<?php
include('scripts/list_terrenos.php');
include('scripts/quartos.php');
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
        <form method="get" action="terrenos.php">
                <ul>
                <li>
                <label>Busca por zonas: </label>
                    <select name="zonas" id="zonas_search">
                        <option>Selecione</option>
                        <option value="1">Zona Central</option>
                        <option value="2">Zona Sul</option>
                        <option value="3">Zona Oeste</option>
                        <option value="4">Zona Norte</option>
                    </select>
                </li>    
                <li>
                    <label>Busca por bairro: </label>
                    <select name="bairro" id="bairro-search">
                        <option>Selecione</option>
                        <?php foreach($bairros as $bairro): ?>
                        <option><?php echo $bairro['bairro'];?></option>
                        <?php endforeach; ?>
                    </select>
                </li>
                <li>
                    <label> Busca por valor: </label>
                    <select name="valor" id="valor-search">
                        <option>Selecione</option>
                        <?php foreach($dados as $imoveis): ?>
                        <option><?php echo $imoveis['valor'];?></option>
                        <?php endforeach; ?>
                </select>
                </li>
                <li> 
                <label>Busca por Nº de quartos: </label>
                    <select name="quartos" id="quartos-search">
                    <?php foreach($quartos as $quarto): ?>
                        <option value = "<?php echo $quarto['quartos'] ?>"><?php echo $quarto['quartos'];?></option>
                        <?php endforeach; ?>
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
        <p><strong> <?php echo $imoveis['titulo'] ?> </strong></p>
            <div id="list-img"> <img src=<?php echo $imoveis['imagem'] ?> > </div>
            <br>
            <p> <b>Valor:</b> <?php echo number_format($imoveis['valor'],2,",","."); ?> </p>
            <a href="visualizar.php?id=<?php echo $imoveis['id_imoveis']; ?>" >Visualizar</a>
        </section>
    </div>
    <?php endforeach; ?>    
    <footer id="footer-informacao">
        <p id="diferente">Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="src/js/select.js"></script>


</body>
</html>
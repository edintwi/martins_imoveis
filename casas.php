<?php 
    include "include/header.php"; 
    include('scripts/quartos.php');
    include('scripts/list_casas.php');
    session_start();
?>

    <section class="filter">
        <form method="get" action="casas.php">
            <ul>
                <li>
                <label>Busca por zonas: </label>
                    <select name="zonas" id="zonas_search" > 
                        <option selected="true" disabled="disabled">Selecione</option>
                        <option value="1">Zona Central</option>
                        <option value="2">Zona Sul</option>
                        <option value="3">Zona Oeste</option>
                        <option value="4">Zona Norte</option>
                    </select>
                </li>    
                <li>
                    <label>Busca por bairro: </label>
                        <select name="bairro" id="bairro-search" >
                        <option value= "">Selecione</option>
                    </select>
                </li>
                <li>

                <li>
                <label> Insira o Valor Mínimo: </label>
                    <select name="valor" id="valor-search" >
                        <option selected="true" disabled="disabled">Selecione</option>  
                            <?php foreach($dados as $imoveis): ?>
                            <?php  echo $imoveis['valor'],('SELECT MIN FROM valor');?>"><?php echo number_format($imoveis['valor'],2,",",".");?></option> -->
                            <?php endforeach; ?>
                     </select>
                </li>
                <li>
                <label> Insira o Valor Máximo: </label>
                    <select name="valor" id="valor-search" >
                        <option selected="true" disabled="disabled">Selecione</option>  
                            <?php foreach($dados as $imoveis): ?>
                              <option value="<?php  echo $imoveis['valor']?>"><?php echo number_format($imoveis['valor'],2,",",".");?></option>
                            <?php endforeach; ?>
                     </select>
                </li>
                <li> 
                    <label>Busca por Nº de quartos: </label>
                    <select name="quartos" id="quartos-search">
                        <?php foreach($quartos as $quarto): ?>
                            <option value = "<?php echo $quarto['quartos'] ?>"><?php echo $quarto['quartos'];?></option>
                        <?php endforeach; ?>
                    </select></li>
                <li>
                    <input type="submit" value="Buscar">
                </li>    
            </ul>
        </form>
    </section>

    <section class="container">

    <?php foreach($dados as $imoveis): ?>
        <div class="container-list">
        <section id="list-casas=">
            <p> <strong><?php echo $imoveis['titulo'] ?> </strong></p>
                <div id="list-img"> <img class="w-100" src="<?php echo $imoveis['imagem'] ?>" > </div>
            <br>
                <p> <b>Valor R$ </b> <?php echo number_format($imoveis['valor'],2,",","."); ?> </p>
            <a href="visualizar.php?id=<?php echo $imoveis['id_imoveis']; ?>?id_zonas=<?php echo $imoveis['id_zonas']; ?>" >Visualizar</a>
        </section>
    </div>
    <?php endforeach; ?> 
  
    </section>
    
    <?php include "include/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="src/js/select.js"></script>

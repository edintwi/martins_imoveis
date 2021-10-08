<?php
session_start();
include('scripts/list_casas.php');
include('include/header adm.php');

?>
<body>
        <div align="center" id="bem-vindo" >
        <?php 
                if(isset($_SESSION['id_usuario']) && empty($_SESSION['id_usuario']) == false){
                    echo 'Seja bem vindo(a)!';
                }else{
                    header('Location: login.php');
                    exit;
                } 
            ?>
        </div>
        <div id="container">
           <div id="form-container">
           
                <form method="POST" action="scripts/add.php"  enctype="multipart/form-data" >
                    <fieldset id="">
                        <label> Titulo: </label>
                        <input type="text" name="titulo" required>
                        <br>
                        <label>Categoria: </label>
                        <select name="categoria">
                            <option disabled> Selecione </option>
                            <option value="1"> Apartamento </option>
                            <option value="2"> Casa </option>
                            <option value="3"> Terreno</option>
                        </select>
                        <label>N° de quartos: </label>
                        <input type="number" name="quartos">
                        <label>Região </label>
                        <select name="zonas" id="zonas_search" required>
                            <option >Selecione</option>
                            <option value="1">Zona Central</option>
                            <option value="2">Zona Sul</option>
                            <option value="3">Zona Oeste</option>
                            <option value="4">Zona Norte</option>
                        
                        </select>

                        <label>Bairro: </label>
                        <select name="bairro" id="bairro-search" >
                            <option value= "">Selecione</option>
                        </select>

                        <br>
                        <label>Endereço: </label>
                        <input type="text" name="endereco" id="endereco-search">
                        <label>Valor: </label>
                        <input type="number" name="valor" required>
                        <br>
                        <label>Imagem principal (Somente uma): </label>
                        <input type="file" name="thumb">
                        <br>
                        <label>Demais imagens: </label>
                        <input type="file" name="all_imgs[]" multiple>
                        <br>
                        <label>Descrição: </label>
                        <textarea id="" name="desc" required></textarea>
                        <br>
                        <br>
                        <input type="submit" value="Cadastrar">
                    </fieldset>
                </form>
           </div>
        </div>
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="src/js/select.js"></script>
        <?php include('include/footer.php');?>
</body>
</html>
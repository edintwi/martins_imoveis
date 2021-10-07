<?php 
include "include/header adm.php";
include "scripts/connection.php";

$info = [];
$id_imoveis = filter_input(INPUT_GET, 'id');
if($id_imoveis){
    $sql = $pdo->prepare("SELECT * FROM imoveis WHERE id_imoveis = :id_imoveis");
    $sql->bindValue(':id_imoveis', $id_imoveis);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
        header('Location:listar_adm.php');
        exit;
    }
}else{
    header('Location:listar_adm.php');
}
session_start();


?>
<body>
        <div align="center" id="bem-vindo" >
        <?php 
                if(isset($_SESSION['id_usuario']) && empty($_SESSION['id_usuario']) == false){
                    echo 'PÁGINA DE EDIÇÃO DE IMOVEL';
                }else{
                    header('Location: login.php');
                    exit;
                } 
            ?>
        </div>
        <div id="container">
           <div id="form-container">
           
                <form method="POST" action="scripts/editar_imoveis.php"  enctype="multipart/form-data" >
                    <fieldset>
                        <input type="hidden" id="id" value="<?php echo $info['id_imoveis']?>">
                        <label> Titulo: </label>
                        <input type="text" name="titulo" value="<?php echo $info['titulo']?>"required>
                        <br>
                        <label>Categoria: </label>
                        <select name="categoria">
                            <option value="0"> Selecione </option>
                            <option value="1"> Apartamento </option>
                            <option value="2"> Casa </option>
                            <option value="3"> Terreno</option>
                        </select>
                        <label>N° de quartos: </label>
                        <input type="number" name="quartos" value="<?php echo $info['quartos']?>" >
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
                            <option value="<?php echo $info['id_zonas ']?>">Selecione</option>
                        </select>

                        <br>
                        <label>Endereço: </label>
                        <input type="text" name="endereço" id="endereço-search">
                        <label>Valor: </label>
                        <input type="number" name="valor" value="<?php echo $info['valor']?>" required>
                        <br>
                        <label>Descrição: </label>
                        <textarea id="" name="desc" required ><?php echo $info['descricao']?></textarea>
                        <br>
                        <br>
                        <input type="submit" value="Atualizar">
                    </fieldset>
                </form>
           </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="src/js/select.js"></script>
<?php 
include "include/footer.php";
?>
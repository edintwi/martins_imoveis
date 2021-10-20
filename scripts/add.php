<?php
include('connection.php');

$titulo = filter_input(INPUT_POST, 'titulo');
$categoria = filter_input(INPUT_POST, 'categoria');
$quartos = filter_input(INPUT_POST, 'quartos');
$bairro = filter_input(INPUT_POST, 'bairro');
$valor = filter_input(INPUT_POST, 'valor');
$descricao = filter_input(INPUT_POST, 'desc');
$endereco = filter_input(INPUT_POST, 'endereco');
$hoje = date('Y/m/d');
$endereco = filter_input(INPUT_POST, 'endereco');

$thumb = $_FILES['thumb']['name'];
$all_imgs = $_FILES['all_imgs']['name'];
$nome_thumb = "thumb.jpg";

if ($categoria == 1){
    $tipoimovel = 'A';
}
elseif ($categoria == 2){
    $tipoimovel = 'C';
}
elseif ($categoria == 3){
    $tipoimovel = 'T';
}

$conexao = mysqli_connect('mysql1.martinsimoveis.com', 'martinsimoveis', '', '1973fttqem');

$tabela_imoveis = mysqli_query($conexao, "SHOW TABLE STATUS LIKE 'imoveis'");
$proximo_id = mysqli_fetch_assoc($tabela_imoveis)['Auto_increment'];
echo $proximo_id;

$caminho_imagens = "imagens_imoveis/original_".$proximo_id.$tipoimovel."/"; //IMAGEM QUE SERÁ EXIBIDA NA LISTAGEM
$caminho_thumb = "imagens_imoveis/original_".$proximo_id.$tipoimovel."/"; //IMAGENS QUE IRÃO APARECER NO SLIDER


mkdir("../imagens_imoveis/original_".$proximo_id.$tipoimovel);

move_uploaded_file($_FILES['thumb']['tmp_name'], '../imagens_imoveis/original_'.$proximo_id.$tipoimovel.'/'.$nome_thumb);

if(count($_FILES['all_imgs']['tmp_name']) > 0){
  
    for($q=0; $q < count($_FILES['all_imgs']['tmp_name']); $q++){
        
        $nome_arquivos = $q.'.jpg';
        move_uploaded_file($_FILES['all_imgs']['tmp_name'][$q], "../imagens_imoveis/original_".$proximo_id.$tipoimovel."/".$nome_arquivos);
    }
};

$sql = $pdo->query("INSERT INTO `imoveis`(
    `id_imoveis`,
    `titulo`,
    `descricao`,
    `id_zonas`,
    `quartos`,
    `imagem`,
    `diretorio_thumb`,
    `id_categoria`,
    `data`,
    `valor`,
    `endereco`
    )
VALUES(
NULL,
    '$titulo',
    '$descricao',
    '$bairro',
    '$quartos',
    '$caminho_thumb$nome_thumb',
    '$caminho_thumb',
    '$categoria',
    '$hoje',
    '$valor',
    '$endereco'
    )");

header('Location: ../listar_adm.php');
?>
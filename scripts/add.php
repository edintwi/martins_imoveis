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

$thumb = $_FILES['thumb']['name'];
$all_imgs = $_FILES['all_imgs']['name'];
$nome_thumb = "thumb.jpg";



//dados de conexão com o banco, na ordem, host, usuario, senha, e nome do banco utilizado
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'martins_imoveis');
//lista informações da tabela entidade (estrutura), uma delas refere-se ao proximo auto_increment
$tabela_imoveis = mysqli_query($conexao, "SHOW TABLE STATUS LIKE 'imoveis'");
$proximo_id = mysqli_fetch_assoc($tabela_imoveis)['Auto_increment'];
echo $proximo_id;

mkdir("../imagens_imoveis/original_".$proximo_id);

move_uploaded_file($_FILES['thumb']['tmp_name'], '../imagens_imoveis/original_teste1/'.$nome_thumb);


$caminho_imagens = "imagens_imoveis/original_teste1/"; //IMAGEM QUE SERÁ EXIBIDA NA LISTAGEM
$caminho_thumb = "imagens_imoveis/original_teste1/"; //IMAGENS QUE IRÃO APARECER NO SLIDER


if(count($_FILES['all_imgs']['tmp_name']) > 0){
  
    for($q=0; $q < count($_FILES['all_imgs']['tmp_name']); $q++){
        
        $nome_arquivos = 'img'.$q.'.jpg';
        move_uploaded_file($_FILES['all_imgs']['tmp_name'][$q], "../imagens_imoveis/original_".$proximo_id."/".$nome_arquivos);
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

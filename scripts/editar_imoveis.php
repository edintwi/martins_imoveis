<?php 
include('connection.php');

$id = filter_input(INPUT_POST, 'id');
$titulo = filter_input(INPUT_POST, 'titulo');
$categoria = filter_input(INPUT_POST, 'categoria');
$quartos = filter_input(INPUT_POST, 'quartos');
$bairro = filter_input(INPUT_POST, 'bairro');
$valor = filter_input(INPUT_POST, 'valor');
$descricao = filter_input(INPUT_POST, 'desc');
$endereco = filter_input(INPUT_POST, 'endereco');

if($id && $titulo){
    $sql = $pdo->query("UPDATE
    `imoveis`
SET
    `titulo` = '$titulo',
    `descricao` = '$descricao',
    `id_zonas` = '$bairro',
    `quartos` = '$quartos',
    `id_categoria` = '$categoria',
    `valor` = '$valor',
    `endereco` = '$endereco'
WHERE
    `id_imoveis` = '$id' ");
}

header("Location:../listar_adm.php");


?>
<?php
include('connection.php');

$titulo = filter_input(INPUT_POST, 'titulo');
$categoria = filter_input(INPUT_POST, 'categoria');
$quartos = filter_input(INPUT_POST, 'quartos');
$bairro = filter_input(INPUT_POST, 'bairro');
$valor = filter_input(INPUT_POST, 'valor');
$descricao = filter_input(INPUT_POST, 'desc');
$hoje = date('Y/m/d');

$thumb = $_FILES['thumb']['name'];
$all_imgs = $_FILES['all_imgs']['name'];
$nome_thumb = "thumb.jpg";

mkdir("../imagens_imoveis/original_teste1");

move_uploaded_file($_FILES['thumb']['tmp_name'], '../imagens_imoveis/original_teste1/'.$nome_thumb);
move_uploaded_file($_FILES['all_imgs']['tmp_name'], '../imagens_imoveis/original_teste1/'.$all_imgs);

$caminho_imagens = "imagens_imoveis/original_teste1/"; //IMAGEM QUE SERÁ EXIBIDA NA LISTAGEM
$caminho_thumb = "imagens_imoveis/original_teste1/"; //IMAGENS QUE IRÃO APARECER NO SLIDER

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
    `valor`
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
    '$valor'
    )");

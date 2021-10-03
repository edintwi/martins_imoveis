<?php
include('connection.php');

$titulo = filter_input(INPUT_POST, 'titulo');
$categoria = filter_input(INPUT_POST, 'categoria');
$quartos = filter_input(INPUT_POST, 'quartos');
$bairro = filter_input(INPUT_POST, 'bairro');
$valor = filter_input(INPUT_POST, 'valor');
$descricao = filter_input(INPUT_POST, 'descricao');
$hoje = date('d/m/Y');

//falta por as imagens

if($titulo && $categoria){
    $sql = $pdo->prepare("INSERT INTO imoveis (titulo, descricao, quartos, id_categoria, valor, bairro, data) VALUES(:titulo, :descricao, :quartos, :id_categoria, :valor, :bairro, :data)");
    
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':quartos', $quartos);
    $sql->bindValue(':id_categoria', $categoria);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':bairro', $bairro);
    $sql->bindValue(':data', $hoje);

    $sql->execute();

    header("Location: ../list_adm.php");
}else{
    header('Location: ../adm.php');
    exit;
}
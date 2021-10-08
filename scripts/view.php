<?php 
include 'connection.php';
$dados = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT imoveis.*,bairros.bairro FROM imoveis INNER JOIN bairros ON bairros.id_zonas = imoveis.id_zonas WHERE id_imoveis =:id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header('Location: casas.php');
        exit;
    }
}else{
    header('Location: casas.php');
    exit;
}
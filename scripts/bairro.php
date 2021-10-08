<?php 
include 'connection.php';
$bairros = [];
$bairro = filter_input(INPUT_GET, 'bairro');
if($bairro){
    $sql = $pdo->prepare("SELECT bairro FROM bairros LEFT JOIN imoveis ON bairros.id_zonas = imoveis.id_zonas");
    $sql->bindValue(':bairro', $bairro);
    $sql->execute();
    if($sql->rowCount() > 0){
        $bairros = $sql->fetch(PDO::FETCH_ASSOC);
    }

}
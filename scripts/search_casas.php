<?php 
include('connection.php');

$bairro = filter_input(INPUT_GET, 'bairro');
$valor = filter_input(INPUT_GET, 'valor');
$quartos  = filter_input(INPUT_GET, 'quartos');

if($bairro){
    $resultados = $pdo->prepare("SELECT * FROM `imoveis` WHERE id_categoria = 2 AND id_zonas LIKE :bairro AND valor LIKE :valor AND quartos = :quartos ORDER BY id_imoveis DESC");
    $resultados->bindValue(':bairro', $bairro);
    $resultados->bindValue(':valor', $valor);
    $resultados->bindValue(':quartos', $quartos);
    
    $resultados->execute();
    if($resultados->rowCount() > 0){
        $_SESSION['busca'] = $resultados->fetchAll(pdo::FETCH_ASSOC);
        header("Location: ../casas.php");
       
    }else{
        
        header("Location: ../casas.php");
        echo 'Nada encontrado!';
        exit;
    }
        
}





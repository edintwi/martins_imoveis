<?php
include('connection.php');


$sql = $pdo->query("SELECT * FROM imoveis WHERE id_categoria=3");

if($sql->rowCount() > 0){
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
}else{
    echo 'Nada encontrado!';
}





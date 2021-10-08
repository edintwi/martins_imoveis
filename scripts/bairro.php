<?php 

include('connection.php');

$bairro = [];
$sql2 = $pdo->query("SELECT bairros FROM imoveis INNER JOIN bairros ON bairros.id_zonas=bairro.id_zonas");

$dados2 = $sql2->fetchAll(PDO::FETCH_ASSOC);


?>
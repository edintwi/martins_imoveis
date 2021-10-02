<?php 
include('connection.php');

$sql = $pdo->query('SELECT bairro
FROM imoveis
GROUP BY bairro;');

$bairros = $sql->fetchAll(PDO::FETCH_ASSOC);



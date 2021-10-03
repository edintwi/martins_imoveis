<?php 
include('connection.php');

$sql = $pdo->query('SELECT valor 
FROM imoveis 
HAVING valor > 300000;');

$bairros = $sql->fetchAll(PDO::FETCH_ASSOC);



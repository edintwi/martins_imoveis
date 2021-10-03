<?php 
include('connection.php');

$sql = $pdo->query('SELECT *
FROM bairros WHERE id_regiao = '.$_GET['id_zona']);

$bairros = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode ($bairros);
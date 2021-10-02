<?php 
include('connection.php');

$dados = [];
$sql = $pdo->query("SELECT * FROM imoveis WHERE id_categoria=2");


$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

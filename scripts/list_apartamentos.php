<?php
include('connection.php');

$sqlString = ('SELECT imoveis.* FROM imoveis INNER JOIN bairros ON imoveis.id_zonas=bairros.id_zonas WHERE id_categoria=1'.
               (!empty($_GET['zonas']) ? ' AND bairros.id_regiao = :zonas' : "").
               (!empty($_GET['bairro']) ? ' AND bairros.id_zonas = :bairro' : ""));

$stmt = $pdo->prepare($sqlString);

if (!empty($_GET['zonas'])) {
    $stmt->bindParam(':zonas', $_GET['zonas'], PDO::PARAM_INT);
}     

if (!empty($_GET['bairro'])) {
    $stmt->bindParam(':bairro', $_GET['bairro'], PDO::PARAM_INT);
}               
$sql = $stmt->execute();

$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
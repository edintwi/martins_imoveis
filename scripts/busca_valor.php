<?php
include('connection.php');

$sqlString = ('SELECT imoveis.* FROM imoveis INNER JOIN bairros ON imoveis.id_zonas=bairros.id_zonas WHERE id_categoria=2'.
               (!empty($_GET['zonas']) ? ' AND bairros.id_regiao = :zonas' : "").
               (!empty($_GET['quartos']) ? ' AND imoveis.quartos = :quartos' : "").
               (!empty($_GET['bairro']) ? ' AND bairros.id_zonas = :bairro' : ""));

$stmt = $pdo->prepare($sqlString);

if (!empty($_GET['zonas'])) {
    $stmt->bindParam(':zonas', $_GET['zonas'], PDO::PARAM_INT);
} 
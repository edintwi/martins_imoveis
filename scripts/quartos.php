<?php 
include('connection.php');

$quartos = $pdo->query('SELECT quartos FROM imoveis GROUP BY quartos;');

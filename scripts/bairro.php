<?php 

include('connection.php');

$sqlString = ('SELECT bairros FROM imoveis INNER JOIN bairros ON bairros.id_zonas=bairro.id_zonas WHERE id_categoria=').
(!empty($_GET['bairro']) ? ' AND bairros.id_zonas = :bairro' : "");

?>
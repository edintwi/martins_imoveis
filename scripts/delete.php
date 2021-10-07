<?php 
include('connection.php');

$id = filter_input(INPUT_GET, 'id');
echo $id;
if($id){
    $sql = $pdo->query("DELETE FROM `imoveis` WHERE `imoveis`.`id_imoveis` = $id");

}      

header('Location: ../listar_adm.php');
exit;


?>
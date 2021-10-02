<?php 
session_start();
include('connection.php');


if(isset($_POST['USER']) && empty($_POST['USER']) == false) {

    $user = addslashes ($_POST['USER']);
    $password = md5(addslashes($_POST['PASS']));

    $sql= $pdo->query("SELECT * FROM usuario WHERE user='$user' AND senha='$password'");    
    
    if($sql->rowCount() > 0){

        $dados = $sql->fetch();
        $_SESSION['id_usuario'] = $dados['id_usuario'];
        header('Location: ../adm.php');
    }else{

    }
}
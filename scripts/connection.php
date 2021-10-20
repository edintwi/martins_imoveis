<?php
    ini_set('default_charset','utf-8');

    try {
        $pdo = new PDO("mysql:dbname=martins_imoveis;host=127.0.0.1; host", "");
    }catch(PDOException $Exception) {
        echo 'Não foi possivel conectar ao banco'.$e->getMessage();
    }
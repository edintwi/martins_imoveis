<?php
    try {
        $pdo = new PDO("mysql:dbname=martins_imoveis;host=localhost", "root", "");
    }catch(PDOException $Exception) {
        echo 'Não foi possivel conectar ao banco'.$e->getMessage();;
    }
    
    
    



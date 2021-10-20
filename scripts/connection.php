
     <!-- // ini_set('default_charset','utf-8');

    // try {
    //     $pdo = new PDO("mysql:dbname=martinsimoveis;host=mysql1.martinsimoveis.com", "martinsimoveis", "1973fttqem",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // }catch(PDOException $Exception) {
    //     echo 'Não foi possivel conectar ao banco'.$e->getMessage();
    // } --> 

    <?php
    try {
        $pdo = new PDO("mysql:dbname=martins_imoveis;host=localhost", "root", "");
    }catch(PDOException $Exception) {
        echo 'Não foi possivel conectar ao banco'.$e->getMessage();;
    }
   



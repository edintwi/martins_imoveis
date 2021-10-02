<?php
session_start();
if(isset($_SESSION['id_usuario']) && empty($_SESSION['id_usuario']) == false){
    echo 'Seja bem vindo(a)!';
}else{
    header('Location: login.php');
    exit;
}      
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/adm.css">
    <title> Martins Imóveis | ADM </title>
</head>
<body>
    <header>
        <div id="menu-container">
            <nav>
                <a href="adm.html">Cadastro</a>
                <a href="modificar.html">Modificar</a>
                <a href="excluir.html">Excluir</a>
                <a href="listar.html">Listar</a>
                <a href="">Sair</a>
            </nav>
        </div>
        <div align="center" id="bem-vindo" >
        </div>
        <div id="container">
           <div id="form-container">
                <form action="">
                    <fieldset id="">
                        <label> Titulo: </label>
                        <input type="text">
                        <br>

                        <label>Descrição: </label>
                        <textarea id="" ></textarea>
                        <br>
                        
                        <label>Endereço: </label>
                        <input type="text">
                        <br>

                        <label>Valor: </label>
                        <input type="nuber">

                        <br>
                        <label> Imagens: </label>
                        <input type="file">

                        <br>
                        <input type="submit" value="Cadastrar">
                    </fieldset>
                </form>
           </div>
        </div>
        <footer id="footer-info">
            <p>Rua Rio da Prata, 245, Sala 105, Bangu | Tel - 2401-2142 |Cel - 98899-2124 / 98755-2142 / 2401-2142</p>
        </footer>
</body>
</html>
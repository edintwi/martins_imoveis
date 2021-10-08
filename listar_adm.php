<?php 

session_start();
include "scripts/connection.php";
include "include/header adm.php";



$lista = [];
$sql = $pdo->query("SELECT * FROM imoveis ORDER BY id_imoveis DESC");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<body>

<?php if(isset($_SESSION['id_usuario']) && empty($_SESSION['id_usuario']) == false){
    }else{
        header('Location: login.php');
      exit;
    }?> 

<table border="1">
  <tr>
    <th>CÓDIGO</th>
    <th>TITULO</th>
    <th>DATA DO CADASTRO</th>
    <th>AÇÕES</th>
  </tr>
<?php  foreach($lista as $imoveis): ?>
    <tr>
        <td><?php echo $imoveis['id_imoveis']?></td>
        <td><?php echo $imoveis['titulo']?></td>
        <td><?php echo $imoveis['data']?></td>
        <td><a href="editar.php?id=<?php echo $imoveis['id_imoveis']?>">EDITAR</a> 
        <a href="scripts/delete.php?id=<?php echo $imoveis['id_imoveis']?>" onclick="return confirm('Tem certeza que deseja excluir?')">EXCLUIR</a>
        </td>
        
    </tr>
<?php endforeach; ?>
</table>
</body>
<?php 
include('include/footer.php');
?>
<?php include("cabecalho.php");?>
<?php include("bancoProduto.php");?>
<?php include("conexao.php");

$cod = $_GET["id"];



         removeProduto($conexao, $cod);
         header("Location: listaProdutos.php?removido=true");
         die();//sempre que fizer um location faz um die depois por segurança.
?>

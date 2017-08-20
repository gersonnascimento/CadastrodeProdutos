<?php include("cabecalho.php");?>
<?php include("bancoProduto.php");?>
<?php include("conexao.php"); 
if(array_key_exists("removido", $_GET)&& $_GET["removido"]=="true"){
?>
<p class="alert-success">Produto removido com sucesso</p>
<?php
}
?>
<table class="table table-striped table-bordered">
     <?php
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto){
        ?>
    <tr>
        <td><?= $produto['nome']?></td>
        <td>R$ <?= $produto['preco']?></td>
        <td><a href="removeProduto.php?id=<?= $produto['id']?>" class="text-danger">remover</a></td>
    </tr>
     <?php
    }
    ?>
</table>
<?php include("rodape.php");?>
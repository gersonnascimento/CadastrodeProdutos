<?php include("cabecalho.php");?>
<?php include("conexao.php");?>
        <?php
        $produto = $_GET["produto"];
        $preco = $_GET["preco"];
        header('Content-Type: text/html; charset=utf-8');
        
         
        function insereProduto($conexao,$produto,$preco){
           $query = "insert into produtos (nome, preco) values ('{$produto}','{$preco}')";
          return mysqli_query($conexao,$query);
        }

        
         
         if (insereProduto($conexao,$produto,$preco)){?>
            <p class="text-success">Produto: <?= $produto?>.<br>Preço: R$<?= $preco?>.<br>Adicionado com sucesso!</p> 
        <?php
         }else {
             $msg = mysqli_error($conexao);
             ?>
            <p class="text-danger">Não foi possível cadastrar!<?= $msg ?></p> 
        <?php
         }
         mysqli_close($conexao); // não é necessário mas podemos deixar.
        ?>
       

<?php include("rodape.php");?>
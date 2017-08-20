<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $produto = $_GET["produto"];
        $preco = $_GET["preco"];
        ?>
        Produto: <?= $produto?>.<br>Preço: R$<?= $preco?>.<br>Adicionado com sucesso!
    </body>
</html>

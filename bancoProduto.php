<?php

function listaProdutos($conexao){
    $produtos = [];
$resultado = mysqli_query($conexao,"select * from produtos");//rodei o comando select no banco
    while($produto = mysqli_fetch_assoc($resultado)){//selecionei o produto associado.
            array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProduto($conexao,$produto,$preco){
    $query = "insert into produtos (nome, preco) values ('{$produto}','{$preco}')";
    return mysqli_query($conexao,$query);
}

function removeProduto($conexao,$id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao,$query);
}
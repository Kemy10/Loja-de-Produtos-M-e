<?php
 
echo "<h2> Produtos de Limpeza </h2>";
 


function InserirProdutos ($nome_produto, $validade, $valor, $quantidade, $tamanho){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_produto", "root", "");

  $Mercadoria = " INSERT INTO  produtos (nome_produto, validade , valor,quantidade,tamanho ) value (:nome_produto, :validade, :valor, :quantidade, :tamanho )";

  $preparacao = $conexao->prepare($Mercadoria);
  $preparacao->bindParam(":nome_produto", $nome_produto);
  $preparacao->bindParam(":validade", $validade);
  $preparacao->bindParam(":valor", $valor);
  $preparacao->bindParam(":quantidade", $quantidade);
  $preparacao->bindParam(":tamanho", $tamanho);

  $preparacao->execute();

}


InserirProdutos ($_POST['nome_produto'], $_POST['validade'], $_POST['valor'],$_POST['quantidade'],$_POST['tamanho']);


?>
<?php 
require("conexao.php"); 
 
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$telefone = $_POST['telefone']; 
 
$insereProduto = "INSERT INTO produtos(nome, endereco, telefone) VALUES 
('$nome','$endereco','$telefone')"; 
$operacaoSQL = mysqli_query($conexao, $insereProduto); 
 
if (mysqli_affected_rows($conexao) != 0) {
    echo "Produtos cadastrado com Sucesso!"; 
    header("Location: listarProduto.php"); 
} else { 
    echo " O Produto não foi cadastrado com Sucesso!"; 
    header("Location: listarProduto.php"); 
}?>
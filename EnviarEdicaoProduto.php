<?php 
require 'conexao.php'; 
 
$id         = $_POST['id']; 
$nome       = $_POST['nome']; 
$endereco   = $_POST['endereco']; 
$telefone   = $_POST['telefone']; 
 
$alteracao = "UPDATE produtos SET nome='$nome', endereco='$endereco', 
telefone='$telefone' WHERE id ='$id' "; 
$execultaAlteracao = mysqli_query($conexao, $alteracao); 
 
if ($execultaAlteracao) { 
    echo "produto atualizado com sucesso"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} else { 
    echo "Erro ao atualizar produtos"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} 
<?php 
require 'conexao.php'; 
 
$id         = $_POST['id']; 
$nome       = $_POST['nome']; 
$endereco   = $_POST['endereco']; 
$telefone   = $_POST['telefone']; 
 
$alteracao = "UPDATE clientes SET nome='$nome', endereco='$endereco', 
telefone='$telefone' WHERE id ='$id' "; 
$execultaAlteracao = mysqli_query($conexao, $alteracao); 
 
if ($execultaAlteracao) { 
    echo "Cliente atualizado com sucesso"; 
    header("Location: listarCliente.php"); 
    exit(0); 
} else { 
    echo "Erro ao atualizar Cliente"; 
    header("Location: listarCliente.php"); 
    exit(0); 
} 
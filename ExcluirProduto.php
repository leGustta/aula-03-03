<?php 
require 'conexao.php'; 
 
$id = $_GET['id']; 
 
$exclusao = "DELETE from produtos WHERE ID ='$id' "; 
$execultaExclusao = mysqli_query($conexao, $exclusao); 
 
if ($execultaExclusao) { 
    echo "produto excluído com sucesso"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} else {  echo "Erro ao excluir produto"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} 
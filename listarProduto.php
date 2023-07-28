<?php 
require 'conexao.php'; 
?> 
<html lang="pt-BR"> 
 
<head> 
    <meta charset="utf-8"> 
    <title>Listagem de Produtos</title> 
</head> 
 
<body> 
    <a href="index.html">Início</a> 
    <a href="cadastroProduto.html">Cadastro</a> 
 
    <h4>Produtos cadastrados</h4> 
    <table>
        <thead> 
            <tr> 
                <th>id</th> 
                <th>nome</th> 
                <th>endereço</th> 
                <th>telefone</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php 
            $consulta = "SELECT * FROM produtos"; 
            $executaConsulta = mysqli_query($conexao, $consulta); 
 
            if (mysqli_num_rows($executaConsulta) > 0) {
                foreach ($executaConsulta as $produtos) {
 
                    ?> 
                    <tr> 
                        <td><?= $produtos['id']; ?></td> 
                        <td><?= $produtos['nome']; ?></td>
                        <td><?= $produtos['endereco']; ?></td> 
                        <td><?= $produtos['telefone']; ?></td>
            <td>
            <a href="EditarProduto.php?id=<?= $produtos['id']; ?>">Editar</a> 
            <a href="ExcluirProduto.php?id=<?= $produtos['id']; ?>">Excluir</a> 
            </td>
                    
                    <?php 
                
                }  
            } else { 
                echo "Nenhum produto cadastrado."; 
            } 
            ?> 
        </tbody> 
    </table> 
</body> 
</html> 
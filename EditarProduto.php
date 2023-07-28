<?php 
require 'conexao.php'; 
?> 
 
<html> 
    <head> 
       <meta charset="utf-8"> 
       <title>Edição de Produto</title> 
    </head> 
   <body> 
    <h4><a href="listarProduto.php">Listagem </a></h4> 
    <?php 
        if (isset($_GET['id'])) { 
            $idProdutos = $_GET['id']; 

            $consulta = "SELECT * FROM produtos where id ='$idProdutos' "; 
            $execultaConsulta = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($execultaConsulta) > 0) { 
                $produtos = mysqli_fetch_array($execultaConsulta); 
        ?> 
        <form action="EnviarEdicaoProduto.php" method="POST"> 
            <input type="hidden" name="id" value="<?= $produtos['id']; ?>"> 
    <label>Nome do Produto</label><br> 
            <input type="text" name="nome" value="<?= $produtos['nome']; ?>"> 
            <br> 
            <label>Endereço</label><br> 
            <input type="text" name="endereco" value="<?=$produtos['endereco']; ?>"> 
            <br> 
            <label>Telefone</label><br> 
            <input type="text" name="telefone" value="<?=$produtos['telefone']; ?>"> 
            <br><br> 
            <div> 
                <button type="submit" name="atualizar"> 
                    Editar Produto 
                </button> 
            </div> 
        </form> 
        <?php 
            } else { 
                echo "<h4>Produto não encontrado</h4>"; 
            } 
        } else { 
            echo "ID não informado"; 
        } 
        ?> 
    </body> 
    </html> 
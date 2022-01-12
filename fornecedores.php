<?php
include "conexao.php";
include "menu.php";

try{
    $sql = "SELECT * FROM tblfornecedores";
    $qry = $con->query($sql);
    $fornecedores = $qry->fetchALL(PDO::FETCH_OBJ);

    //echo "<pre>";
    //    print_r($clientes);
       
} catch(PDOException $e){
    echo $e->getMessage();
}


?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema</title>
  </head>
  <body>
    <h1>Fornecedores cadastrados</h1>
<hr>

<div class="container">
    <a href="cadnovofornecedor.php" class="btn btn-primary">Novo</a>
    <table class="table table-success table-striped table-hover">
        <thead>
            <tr>
                <th>idFornecedor</th>
                <th>Fornecedor</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>email</th>
                <th>IDProduto</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($fornecedores as $fornecedor) { ?>
            <tr>
                <th><?php echo $fornecedor->IDFornecedor ?></th>
                <th><?php echo $fornecedor->Fornecedor ?></th>
                <th><?php echo $fornecedor->CNPJ ?></th>
                <th><?php echo $fornecedor->Telefone ?></th>
                <th><?php echo $fornecedor->email ?></th>
                <th><?php echo $fornecedor->IDProduto ?></th>
                <th>Editar</th>
                <th>Excluir</th> 
            </tr>
            <?php } ?>
            </tbody>
           

    </table>
</div>

    <?php 
    
    include "rodape.php";
    ?>
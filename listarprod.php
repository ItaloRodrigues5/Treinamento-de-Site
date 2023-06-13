<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> XUXA LISTAR PRODUTOS </title>
    
</head>
<body class = "quatro">

<h1> Tabela de Produtos Cadastrados </h1>

<table border = "3" class="tb" >
    <tr id="trr">
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Fornecedor</th>
    </tr>

<?php

    $con = mysqli_connect("localhost", "root", "", "xuxa");
    $select = "select p.*, f.nome as nomefornecedor from produto p, fornecedor f where f.codfor = p.fornecedor";
    $result = mysqli_query($con, $select);
    while($linha = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $linha['codprod'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['preco'] . "</td>";
            $op = $linha['fornecedor'];
            echo "<td> <a href = 'listarfor.php?op=$op'>" . $linha['nomefornecedor'] . "</a> </td>";
        echo "</tr>";
    }

?>
</table>
<br>
<a href = "index.html"> Voltar ao início </a>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> XUXA LISTAR PRODUTOS </title>
</head>
<body>

    <table border = 3>
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Fornecedor</td>
        </tr>

<?php

    $con = mysqli_connect("localhost", "root", "", "xuxa");

    $select = "select p.*, f.nome as nomefornecedor from produto p, fornecedor f where f.codfor = p.fornecedor order by codprod";

    $result = mysqli_query($con, $select);
    while($linha = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $linha['codprod'] ."</td>";
        echo "<td>" . $linha['nome'] ."</td>";
        echo "<td>" . $linha['preco'] ."</td>";
        $op = $linha['fornecedor'];
        echo "<td> <a href = 'listarfor.php?op=$op'>" . $linha['nomefornecedor'] . "</a> </td>";
        echo "</tr>";
    }


?>
    </table>


</body>
</html>
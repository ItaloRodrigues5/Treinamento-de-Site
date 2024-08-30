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
            <th>Código</th>
            <th>Nome</th>
            <th>UF</th>
            <th>Cidade</th>
            <th>Telefone</th>
        </tr>
    
    <?php

        $con = mysqli_connect("localhost", "root", "", "xuxa");
        
        $op = $_GET['op'];
        
        if($op > 0){
            $select = "select * from fornecedor where codfor = " . $op;

        }

        else{
            $select = "select * from fornecedor";
        }

        $result = mysqli_query($con, $select);

        while($linha = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $linha['codfor'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['uf'] . "</td>";
            echo "<td>" . $linha['cidade'] . "</td>";
            echo "<td>" . $linha['telefone'] . "</td>";
            echo "</tr>";
        }

    ?>
    
    </table> <br> <br>

    <a href="acesso.html"> Voltar ao início </a>


</body>
</html>
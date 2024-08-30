<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> XUXA CADASTRO DE PRODUTOS </title>
</head>
<body>

    <form action = "conprod.php" method = "POST">
        <fieldset>
            <legend> Cadastro de Produto </legend>

            <label for="codprod"> Código </label>
            <input type="number" name="codprod" id="codprod" required autofocus placeholder = "Código do produto"> <br>
            
            <label for="nome"> Nome</label>
            <input type="text" name="nome" id="nome" required autofocus placeholder = "Nome do produto"> <br>
            
            <label for="preco"> Preço </label>
            <input type="number" name="preco" id="preco" required autofocus placeholder = "Preço do produto"> <br>
            
            <label for="fornecedor"> Fornecedor </label>
            <select name="fornecedor" id="fornecedor">
                <option value = 0> Selecione o indivíduo </option>

            <?php
                $con = mysqli_connect("localhost", "root", "", "xuxa");

                $select = "select * from fornecedor";

                $result = mysqli_query($con, $select);
                while($linha = mysqli_fetch_array($result)){
                    echo "<option value ='" . $linha['codfor'] . "'>" . $linha['nome'] . "</option>";

                }


            ?>

            </select> <br>

            <input type = "submit" value = "Cadastrar"> <br>
    

        </fieldset>

    </form>
    
</body>
</html>
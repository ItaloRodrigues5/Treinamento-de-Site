<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> FORMULÁRIO DA XUXA </title>
</head>
<body class = "tres">
    <form action = "cadprod.php" method = "post">
        <fieldset>
        
        <legend> Formulário </legend>
        
        <label for = "id"> Código </label> <br>
        <input type = "number" name = "id" id = "id" placeholder = "Informe o código do produto"> <br>
    
        <label for = "nome"> Nome </label> <br>
        <input type = "text" name = "" id = "nome" placeholder = "Informe o nome do produto"> <br>
       
        <label for = "preco"> Preço </label> <br>
        <input type = "number" name = "preco" id = "" placeholder = "Informe o preço do produto"> <br>
       
        <label for = "fornecedor"> Fornecedor </label>
       
        <select name="for" id="">
        <option value = '0'> Selecione o indivíduo </option>

        <?php

          $con = mysqli_connect("localhost", "root", "", "xuxa");

          $select = "select * from fornecedor";

          $result = mysqli_query($con, $select);
          while($linha = mysqli_fetch_array($result)){
            echo "<option value = '". $linha['codfor'] ."'>" . $linha['nome'] . "</option>";
          }

        ?>


      </select> <br>
       
       <input type = "submit" value = "Cadastrar">
      </fieldset>
    
</form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Formulario do Cadastro</legend>
        <form action="recebfor.php" method="post">
            <label for="cpf">Cpf:</label><br>
            <input type="number" name="cpf" id="cpf"><br>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome"><br>
            <label for="rg">Rg:</label><br>
            <input type="number" name="rg" id="rg"><br>
            <label for="data">Data:</label><br>
            <input type="date" name="data" id="data"><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br>

            <label for="sexo">Sexo: </label>
            <select name="sexo" id="sexo">

            <?php

            $conn = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from usuario";
            $result = mysqli_query($conn, $select);
            while($linha = mysqli_fetch_array($result)) {
                echo "<option value='" . $linha['sexo'] . "'>" . $linha['sexo'] . "</option>";
            }

            ?>
            </select>
            <br>
            <label for="cidade">Cidade:</label><br>
            <input type="text" name="cidade" id="cidade"><br>
            <label for="rua">Rua:</label><br>
            <input type="text" name="rua" id="rua"><br>

            Uf:

            <select name='uf'>

            <?php 
            $con = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from uf";
            $result = mysqli_query($con, $select);
            while($linha = mysqli_fetch_array($result)){
                echo "<option value='" . $linha['codigo'] . "'> " . $linha['nome'] . "</option>" ;
            }
            ?>
            </select>
                    
                
            </select><br>
            <label for="bairro">Bairro:</label><br>
            <input type="text" name="bairro" id="bairro"><br>
            <label for="num">Numero da Rua:</label><br>
            <input type="number" name="num" id="num"><br>
            <label for="tel">Telefone:</label><br>
            <input type="text" name="tel" id="tel"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br>
           
            Tipo de Pessoa:

            <select name='pessoa'>

            <?php 
            $con = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from pessoa";
            $result = mysqli_query($con, $select);
            while($linha = mysqli_fetch_array($result)){
                echo "<option value='" . $linha['codigo'] . "'> " . $linha['tipo'] . "</option>" ;
            }
            ?>
            </select><br>
            Estatus:

            <select name='stats'>

            <?php 
            $con = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from estatus";
            $result = mysqli_query($con, $select);
            while($linha = mysqli_fetch_array($result)){
                echo "<option value='" . $linha['codigo'] . "'> " . $linha['tipoestatus'] . "</option>" ;
            }
            ?>
            </select><br>
            <input type="submit">

        </form>
        
    </fieldset>
</body>
</html>
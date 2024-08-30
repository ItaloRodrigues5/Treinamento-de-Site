<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    
    <form action="cadastro.php" method="post">
        <fieldset>
        <legend> Formulário de Cadastro </legend>
        
          <label for="cpf">CPF: </label>
        <input type="number" name="cpf" id="cpf" placeholder = "Número do CPF"> <br>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder = "Nome de usuário"> <br>
      
        <label for="rg">RG: </label>
        <input type="number" name="rg" id="rg" placeholder = "RG de usuário"> <br>
        
        <label for="datanascimento">Data de nascimento: </label>
        <input type="date" name="datanascimento" id="datanascimento"> <br>
        
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder = "Email do usuário"> <br>

        <label for="sexo">Sexo: </label>
        <select name="sexo" id="sexo">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <br>
        <label for="cidade">Cidade: </label>
        <input type="text" name="cidade" id="cidade"placeholder = "Cidade do usuário">
        <br>
        <label for="rua">Rua: </label>
        <input type="text" name="rua" id="rua" placeholder = "Rua do usuário">
        <br>
        <label for="uf">UF: </label>
        <select name="uf" id="uf">
        <option value = "0"> Selecione a UF de usuário </option>
            <?php

                $conn = mysqli_connect("localhost", "root", "", "sisbiblio");
                $select = "select * from uf";
                $result = mysqli_query($conn, $select);
                while($linha = mysqli_fetch_array($result)) {
                    echo "<option value='" . $linha['codigo'] . "'>" . $linha['nome'] . "</option>";
                }

            ?>
        </select>
        <br>
        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" id="bairro">
        <br>
        <label for="numero">Numero: </label>
        <input type="number" name="numero" id="numero">
        <br>
        <label for="telefone">Telefone: </label>
        <input type="tel" name="telefone" id="telefone">
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <br>
        <label for="pessoa">Pessoa: </label>
        <select name="pessoa" id="pessoa">
          <option value = "0"> Selecione o tipo de pessoa </option>
            <?php

            $conn = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from pessoa";
            $result = mysqli_query($conn, $select);
            while($linha = mysqli_fetch_array($result)) {
                echo "<option value='" . $linha['codigo'] . "'>" . $linha['tipo'] . "</option>";
            }

            ?>
        </select>
        <br>
        <label for="estatus">Estatus: </label>
        <select name="estatus" id="estatus">
          <option value = "0"> Selecione o tipo de estatus </option>
            <?php

            $conn = mysqli_connect("localhost", "root", "", "sisbiblio");
            $select = "select * from estatus";
            $result = mysqli_query($conn, $select);
            while($linha = mysqli_fetch_array($result)) {
                echo "<option value='" . $linha['codigo'] . "'>" . $linha['tipoestatus'] . "</option>";
            }

            ?>

        </select>
        <br>
        <input type="submit" value="Cadastrar">

        </fieldset>
    </form>
</body>
</html>
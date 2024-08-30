<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    
    <form action="login.php" method="post">
      <fieldset>
        <label for="cpf">CPF: </label>
        <input type="number" name="cpf" id="cpf">
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <br>
        <label for="pessoa">Pessoa: </label>
        <select name="pessoa" id="pessoa">

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
        <input type="submit" value="Login">
      </fieldset>
    </form>
</body>
</html>
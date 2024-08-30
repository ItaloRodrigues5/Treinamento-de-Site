<?php

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$rg= $_POST['rg'];
$datanascimento = $_POST['datanascimento'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$uf = $_POST['uf'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$pessoa = $_POST['pessoa'];
$estatus = $_POST['estatus'];

$conn = mysqli_connect("localhost", "root", "", "sisbiblio");
$insert = "insert into usuario values($cpf, '$nome', $rg, '$datanascimento', '$email', '$sexo', '$cidade', '$rua', $uf, '$bairro', $numero, '$telefone', '$senha', $pessoa, $estatus)";
$result = mysqli_query($conn, $insert);
if($result)  {
    echo "Dados inseridos com sucesso!!!<br/>";
    echo "<br/><a href='formlog.php'> Faça Login </a>";
}
else {
    echo "Ocorreu um erro ao tentar cadastrar o usuario!!!<br/>";
    echo "<a href='formcad.php'> Tentar novamente </a>";
}

?>
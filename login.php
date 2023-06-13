<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$con = mysqli_connect("localhost", "root", "", "xuxa");

$insert = "insert into usuario values($id, '$nome', '$senha')";

$result = mysqli_query($con, $insert);

while($linha = mysqli_fetch_array($result)){
    if($id = $linha['id'] && $nome = $linha['nome'] && $senha = $linha['senha']){
        echo "header:: <a href = 'xuxa.html'> Login realizado com sucesso! </a>";
        echo "Cadastro realizado com sucesso";
    } 
    else{
        echo "Cadastro inválido. Faça novamente";
    }
}

?>


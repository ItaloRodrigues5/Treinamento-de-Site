<?php

$codprod = $_POST['codprod'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];

$con = mysqli_connect("localhost", "root", "", "xuxa");

$insert = "insert into produto values($codprod, '$nome', $preco, $fornecedor)";

$result = mysqli_query($con, $insert);
if($result){
    echo "<h1> Cadastro do produto realizado com sucesso. </h1> <br>";
    echo "<hr>";
    echo "<a href = 'acesso.html'> Seguir para a página inicial </a>";
    echo "<hr>";
}

else{
    echo " <h1> Falha ao cadastrar produto. </h1> <br>";
    echo "<hr>";
    echo "<a href = 'cadprod.php'> Cadastrar novamente </a>";
    echo "<hr>";
}

?>
<?php

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];

$con = mysqli_connect("localhost", "root", "", "xuxa");

$insert = "insert into produto values($codigo, '$nome', $preco, $fornecedor)";

$result = mysqli_query($con, $insert);

if($result){
    echo "Tudo certo. Show!";

    echo "<a href = 'cadprod.php'> Cadastrar outro produto </a>";
}
else{
    echo "Deu merda. Show!";
}

?>
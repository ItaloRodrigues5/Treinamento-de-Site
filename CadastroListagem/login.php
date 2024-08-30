<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $con = mysqli_connect("localhost", "root", "", "xuxalogin");

    $insert = "insert into usuario values('$nome', '$senha')";

    $result = mysqli_query($con, $insert);
    
    while($linha = mysqli_fetch_array($result)){
        if($nome = $linha['senha'] && $senha = $linha['senha']){
            echo "action = 'acesso.html'";

    }
    
        else{
            echo "Dados inválidos. Insira dados válido para o login.";
            echo "action = 'login.html'";
        }
    }
?>
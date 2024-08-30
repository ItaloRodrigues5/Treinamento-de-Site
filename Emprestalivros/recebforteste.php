<?php
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $rg= $_POST['rg'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $sexo = $_POST ['']
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $uf = $_POST['uf'];
    $bairro = $_POST['bairro'];
    $num = $_POST['num'];
    $tel = $_POST['tel'];
    $senha = $_POST['senha'];
    $pessoa = $_POST['pessoa'];
    $stats = $_POST['stats'];
    
    $con = mysqli_connect("localhost", "root", "", "sisbiblio");
    $insert = "insert into usuario values($cpf, '$nome', $rg, '$data','$email','$sexo','$cidade','$rua',$uf,'$bairro',$num,'$tel','$senha',$pessoa,$stats)";
    $result = mysqli_query($con, $insert);
    if($result){
        echo "Dados inseridos com sucesso!!!<br/>";
        echo "<br/><a href='formlog.php'> Faça Login </a>";
    
    }
    else{
        echo "Ocorreu um erro ao tentar cadastrar o usuario!!!<br/>";
        echo "<a href='formcad.php'> Tentar novamente </a>";
    }
    


?>
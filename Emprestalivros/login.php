<?php

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$pessoa = $_POST['pessoa'];

$conn = mysqli_connect("localhost", "root", "", "sisbiblio");
$select = "select * from usuario u where u.cpf=". $cpf ." and u.senha=". $senha ." and u.pessoa=" . $pessoa ."";
$result = mysqli_query($conn, $select);
if($result -> num_rows == 0) {
    header("location:nouser.html");

}
else {
    if($pessoa == 1) {
        header("location:leitor.html");
    }
    else {
        header("location:func.html");
    }
}


?>
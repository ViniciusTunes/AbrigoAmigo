<?php
session_start();
include('conex.php');
if (empty($_POST['cpf']) or empty($_POST['senha'])){
            header('Location: loginAlterar.html');
            exit();
}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
$senhanova = mysqli_real_escape_string($connect, $_POST['senhanova']);

//$comando = "select from Usuarios where cpf ='{$cpf}' and senha ='{$senha}'";
$queryalterar = "UPDATE Usuarios SET senha='{$senhanova}' where cpf ='{$cpf}' and senha ='{$senha}'";

$alterar = mysqli_query($connect, $queryalterar);

//$linha = mysqli_num_rows($alterar);

if ($alterar == 1){
    $_SESSION['mensagem'] = "Senha alterada com sucesso!";
    header('Location: loginAlterar.html');
}
else{
    echo "Erro ao Alterar";
}
?>
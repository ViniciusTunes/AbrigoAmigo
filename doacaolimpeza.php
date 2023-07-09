<?php

session_start();
include('conex.php');

if(empty($_POST['detergente']) or empty($_POST['sabao'])) {
    header ('Location: doacaolimpeza.html');
    exit();
}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$detergente = mysqli_real_escape_string($connect, $_POST['detergente']);
$sabao = mysqli_real_escape_string($connect, $_POST['sabao']);
$alcool = mysqli_real_escape_string($connect,$_POST['alcool']);
$escovad = mysqli_real_escape_string($connect, $_POST['escovad']);
$pasta = mysqli_real_escape_string($connect, $_POST['pasta']);
$data = mysqli_real_escape_string($connect, $_POST['data']);

$query = "insert into ProdutosLimpeza(cpf, detergente, sabao, alcool, escovad, pasta, data) values('$cpf','$detergente','$sabao','$alcool','$escovad','$pasta','$data')";

if (mysqli_query($connect, $query)){
        $_SESSION['mensagem'] = "Doação efetuada com sucesso!";
        sleep(1.5);
        header ("Location: doacaolimpeza.html");

} else{

    echo "Erro ao gravar, caso permaneça entre em CONTATO!";
}

?>
<?php

session_start();
include('conex.php');

if(empty($_POST['cpf']) or empty($_POST['data'])) {
    header ('Location: doacao.html');
    exit();
}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$arroz = mysqli_real_escape_string($connect, $_POST['arroz']);
$feijao = mysqli_real_escape_string($connect, $_POST['feijao']);
$macarrao = mysqli_real_escape_string($connect,$_POST['macarrao']);
$acucar = mysqli_real_escape_string($connect, $_POST['acucar']);
$sal = mysqli_real_escape_string($connect, $_POST['sal']);
$farinha = mysqli_real_escape_string($connect, $_POST['farinha']);
$oleo = mysqli_real_escape_string($connect, $_POST['oleo']);
$enlatados = mysqli_real_escape_string($connect, $_POST['enlatados']);
$data = mysqli_real_escape_string($connect, $_POST['data']);


$query = "insert into Doacao(cpf, arroz, feijao, macarrao, acucar, sal, farinha, oleo, enlatados, data) values('$cpf','$arroz','$feijao','$macarrao','$acucar','$sal','$farinha','$oleo','$enlatados','$data')";

if (mysqli_query($connect, $query)){
        $_SESSION['mensagem'] = "Doação efetuada com sucesso!";
        sleep(1.5);
        header ("Location: doacao.html");

} else{

    echo "Erro ao gravar, caso permaneça entre em CONTATO!";
}

?>
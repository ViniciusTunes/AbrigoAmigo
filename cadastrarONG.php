<?php

session_start();
include('conex.php');

if(empty($_POST['cnpj']) or empty($_POST['senha'])) {
    header ('Location: registerONG.html');
    exit();
}

$cnpj = mysqli_real_escape_string($connect, $_POST['cnpj']);
$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$endereco = mysqli_real_escape_string($connect, $_POST['endereco']);
$cidade = mysqli_real_escape_string($connect, $_POST['cidade']);
$cep = mysqli_real_escape_string($connect, $_POST['cep']);
$numerocasa = mysqli_real_escape_string($connect, $_POST['numerocasa']);
$bairro = mysqli_real_escape_string($connect,$_POST['bairro']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$estado = mysqli_real_escape_string($connect, $_POST['estado']);
$inscricao = mysqli_real_escape_string($connect, $_POST['inscricao']);
$site = mysqli_real_escape_string($connect, $_POST['site']);
$senha = mysqli_real_escape_string($connect,$_POST['senha']);

$query = "insert into CadastroOngs(cnpj, cpf, nome, endereco, cidade, cep, numerocasa, bairro, email, estado, inscricao, site, senha) values('$cnpj','$cpf', '$nome', '$endereco', '$cidade', '$cep', '$numerocasa', '$bairro', '$email', '$estado','$inscricao','$site', '$senha')";

if (mysqli_query($connect, $query)){
        $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
        sleep(1.5);
        header ("Location: index.html");

} else{

    echo "Erro ao gravar";
}

?>
<?php

session_start();
include('conex.php');

if(empty($_POST['nome']) or empty($_POST['senha'])) {
    header ('Location: register.html');
    exit();
}

$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$cnpj = mysqli_real_escape_string($connect, $_POST['cnpj']);
$rg = mysqli_real_escape_string($connect,$_POST['rg']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$numero = mysqli_real_escape_string($connect,$_POST['numero']);
$endereco = mysqli_real_escape_string($connect, $_POST['endereco']);
$cidade = mysqli_real_escape_string($connect, $_POST['cidade']);
$cep = mysqli_real_escape_string($connect,$_POST['cep']);
$numerocasa = mysqli_real_escape_string($connect, $_POST['numerocasa']);
$referencia = mysqli_real_escape_string($connect, $_POST['referencia']);
$bairro = mysqli_real_escape_string($connect,$_POST['bairro']);
$estado = mysqli_real_escape_string($connect, $_POST['estado']);
$complemento = mysqli_real_escape_string($connect, $_POST['complemento']);
$inscricao = mysqli_real_escape_string($connect, $_POST['inscricao']);
$site = mysqli_real_escape_string($connect, $_POST['site']);
$senha = mysqli_real_escape_string($connect,$_POST['senha']);

$query = "insert into Usuarios(nome, cpf, cnpj, rg, email, numero, endereco, cidade, cep, numerocasa, referencia, bairro, estado, complemento, inscricao, site, senha) values('$nome','$cpf','$cnpj','$rg','$email','$numero','$endereco','$cidade','$cep','$numerocasa','$referencia','$bairro','$estado','$complemento','$inscricao','$site','$senha')";

if (mysqli_query($connect, $query)){
        $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
        sleep(1.5);
        header ("Location: index.html");

} else{

    echo "Erro ao gravar";
}

?>
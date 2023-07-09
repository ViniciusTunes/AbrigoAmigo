<?php

session_start();
include('conex.php');

if(empty($_POST['camisa']) or empty($_POST['calca'])) {
    header ('Location: doacaoroupas.html');
    exit();
}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$camisa = mysqli_real_escape_string($connect, $_POST['camisa']);
$calca = mysqli_real_escape_string($connect, $_POST['calca']);
$meia = mysqli_real_escape_string($connect,$_POST['meia']);
$cueca = mysqli_real_escape_string($connect, $_POST['cueca']);
$calcinha = mysqli_real_escape_string($connect, $_POST['calcinha']);
$cobertor = mysqli_real_escape_string($connect, $_POST['cobertor']);
$data = mysqli_real_escape_string($connect, $_POST['data']);

$query = "insert into Roupas(cpf, camisa, calca, meia, cueca, calcinha, cobertor, data) values('$cpf','$camisa','$calca','$meia','$cueca','$calcinha','$cobertor','$data')";

if (mysqli_query($connect, $query)){
        $_SESSION['mensagem'] = "Doação efetuada com sucesso!";
        sleep(1.5);
        header ("Location: doacaoroupas.html");

} else{

    echo "Erro ao gravar, caso permaneça entre em CONTATO!";
}

?>
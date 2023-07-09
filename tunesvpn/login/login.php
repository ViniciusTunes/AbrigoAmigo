<?php

session_start();

include('conex.php');

if(empty($_POST['cpf']) or empty ($_POST['senha'])){
      sleep(1.5);
      header('Location: login.html');
      exit();
}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);


$comando = "select * from Usuarios where cpf = '{$cpf}' and senha = '{$senha}' ";

$executar = mysqli_query ($connect, $comando); 

$linha = mysqli_num_rows($executar);

if($linha == 1) {
      $_SESSION['cpf'] = $cpf;
      header('Location: ../../doacao.html');
      exit();

}else{
        header('Location: login.html');
        exit();

}

?>
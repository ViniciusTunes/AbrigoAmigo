<?php
session_start();
include('conex.php');

//if (empty($_POST['cpf'])){
//   header('Location: InfosDoador.html');
//   exit();
//}

$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);

$query = "select * from Usuarios where cpf = '{$cpf}'";
$result = mysqli_query($connect, $query) or die ("ERRO Consultar");

$row = mysqli_num_rows($result);

while ($registro = mysqli_fetch_array($result)){

    echo "<input type='text' name='nome' value='{$registro['nome']}'>";
    echo "<input type='text' name='cnpj' value='{$registro['cnpj']}'>";
    echo "<input type='text' name='rg' value='{$registro['rg']}'>";
    echo "<input type='text' name='email' value='{$registro['email']}'>";
    echo "<input type='text' name='numero' value='{$registro['numero']}'>";
    echo "<input type='text' name='endereco' value='   {$registro['endereco']}'>";
}

?>
<?php
session_start();
include('conex.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
<!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!--=============== CSS ===============-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="assets/css/styleIndex.css">
        
        <!-- CSS / Bootstrap -->
    <link href="assets/css/imports_new.css" rel="stylesheet">

    <!-- AOS -->
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.8.1/css/all.css" />

    <!-- JQUERY -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- AOS -->
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>

    <!-- REMIX ICONS -->
    <link href="../cdn.jsdelivr.net/npm/remixicon%402.5.0/fonts/remixicon.css" rel="stylesheet">

        <title>Abrigo Amigo</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.html" class="nav__logo" style="font-size:25px";><b>Abrigo Amigo</b></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link"><b>Home</b></a>
                        </li>
                        <li class="nav__item">
                            <a href="https://api.whatsapp.com/send?phone=5514998409269&text=Olá%2C%20estou%20com%20uma%20dúvida%20e%20gostaria%20de%20entrar%20em%20contato!" class="nav__link"><b>Contato</b></a>
                        </li>
                        <li class="nav__item">
                            <a href="https://www.instagram.com/tcc.abrigo.amigo/" class="nav__link"><b>Instagram</b></a>
                        </li>

                        <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

                <div class="umBtn">
                <a href="doacaoroupas.html" class="button button__header">Voltar</a>
                </div>
            </nav>
        </header>

        <main class="main">
        
        <br><br><br><br><br>
        
<!--=============== TABELA ===============-->

<style>
 table { margin: 20px 0 40px; }
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #dad60d;}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
  background-color: #1f1b1b;
  color: white;
}
</style>

<?php

$data = date('d/m/Y H:i');
echo $data;

?>


<center>
         <h2>Doações de Roupas Pendentes e Realizados</h2>
         <br>
        
<?php
        $sql = "SELECT * FROM Roupas ORDER BY ID";

        $result=mysqli_query($connect,$sql) or die ("ERRO DE CONSULTA");

  
  echo "<table>";
  echo "<thead>";
            echo "<tr class=''>";
            echo"<th class=''>ID</th>";
            echo"<th>CPF DOADOR</th>";
            echo"<th>CAMISA</th>";
            echo"<th>CALÇA</th>";
            echo"<th>MEIA</th>";
            echo"<th>CUECA</th>";
            echo"<th>CALCINHA</th>";
            echo"<th>COBERTOR</th>";
            echo"<th>DATA</th>";
    
            
echo"<tbody>"; 

$cadastrados = 1;
        if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr scope='row' class=''>";
        echo "<td>$row[ID]</td>";
        echo "<td>$row[cpf]</td>";
        echo "<td>$row[camisa]</td>";
        echo "<td>$row[calca]</td>";
        echo "<td>$row[meia]</td>";
        echo "<td>$row[cueca]</td>";
        echo "<td>$row[calcinha]</td>";
        echo "<td>$row[cobertor]</td>";
        echo "<td>$row[data]</td>";
        echo "</tr>";
        $cadastrados++;
        
      }
}
echo "</tbody>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</table>";
echo "</center>";
?>


<br><br><br><br><br><br><br><br>


<!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Faça Parte</a>
                    <a href="#home"><p class="footer__description">Início do site</p></a>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Nosso Projeto</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Doações</a></li>
                        <li><a href="#" class="footer__link">Reportar um erro</a></li>
                        <li><a href="#" class="footer__link">Regulamento</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Nossa Equipe</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Focada em trazer o melhor a todos</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Suporte</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Perguntas</a></li>
                        <li><a href="#" class="footer__link">Ajuda ao doador</a></li>
                    </ul>
                </div>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/tcc.abrigo.amigo/" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; Abrigo Amigo. All right reserved</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/scroll.js"></script>
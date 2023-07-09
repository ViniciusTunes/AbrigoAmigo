<?php
    //Connect to database
    $servername = "fdb34.awardspace.net";
    $username = "4159512_batata";
    $password = "pirulito100";
    $db_name = "4159512_batata";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()):
        echo "Conexão falhou". mysqli_connect_error();
    endif;

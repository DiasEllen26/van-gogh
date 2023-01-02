<?php
    $servidor = "localhost";
    $banco = "van_gogh";
    $usuario = "root";
    $senha = "";

    $con = mysqli_connect($servidor,$usuario,$senha,$banco) or die("Não foi possível conectar ao banco");
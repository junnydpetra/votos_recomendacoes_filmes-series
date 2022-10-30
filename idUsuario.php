<?php

include_once('conexao.php');

    $usuario = mysqli_real_escape_string($conector, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conector, $_POST['senha']);

    

?>
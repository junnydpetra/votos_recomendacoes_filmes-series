<?php
    session_start();

    include_once('conexao.php');
    include_once('cadastrarTitulo.php');

    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);

    $envia_titulo = "INSERT INTO tb_titulos (titulo) VALUES ('$titulo')";
    $retorna_titulo = mysqli_query($conector, $envia_titulo);

    if (mysqli_insert_id($conector)) {
        header("Location: home.php");
    } else {
        $_SESSION['msg'] = "Falha ao cadastrar título!";
        header("Location: home.php");
    }

?>
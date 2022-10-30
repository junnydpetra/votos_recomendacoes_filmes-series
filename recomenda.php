<?php

    session_start();
    include_once('conexao.php');

    if (isset($_GET['id'])) 
    {
        $update_votos = "UPDATE tb_titulos SET voto_recomenda=voto_recomenda+1
        WHERE id = '" . $_GET['id'] . "'";
        $recomendacoes = mysqli_query($conector, $update_votos);

        if (mysqli_affected_rows($conector)) {
            $_SESSION['msg'] = "Voto realizado!";
            header("Location: listarAnalises.php");
        } else {
            $_SESSION['msg'] = "Voto não realizado. Tente novamente!";
            header("Location: home.php");
        }
    }

?>
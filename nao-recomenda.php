<?php

include_once('conexao.php');

    session_start();
    include_once('conexao.php');

    if (isset($_GET['id'])) 
    {
        $update_votos = "UPDATE tb_titulos SET voto_nao_recomenda=voto_nao_recomenda+1
        WHERE id = '" . $_GET['id'] . "'";
        $recomendacoes = mysqli_query($conector, $update_votos);

        if (mysqli_affected_rows($conector)) {
            header("Location: listarAnalises.php");
        } else {
            header("Location: home.php");
        }
    }

?>
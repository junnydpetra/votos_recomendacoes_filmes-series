<?php

    include_once('conexao.php');

    $id = $_GET['id'];

    $sql_excluir=mysqli_query($conector, "DELETE FROM tb_titulos WHERE id='$id' ");

    if ($sql_excluir==true) 
    {
        echo "<script>
                    alert('Registro Excluído Com Sucesso!');
                    window.location.href='listarTitulos.php';
            </script>";
    } else {
        echo "<script>
                    alert('Falha Ao Excluir Registro!');
                    window.location.href='listarTitulos.php';
            </script>";
    }

?>
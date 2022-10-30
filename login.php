<?php

    include_once('conexao.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql_logar=mysqli_query($conector, "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' and senha = '$senha'");

    if (mysqli_num_rows($sql_logar) != 0) 
    {
        header('location:home.php');
    } else {
        echo "<script>
            alert('Usuário não registrado!');
            window.location.href='cadastrarUsuario.html';
        </script>";
    }

?>
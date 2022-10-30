<?php

include_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql_cadastro = mysqli_query($conector, "INSERT INTO tb_usuarios (usuario, senha, email) VALUES ('$usuario', '$senha', '$email')");

    if ($sql_cadastro == true) {
        echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href='index.html';
        </script>";
    } else {
        echo "<script>
            alert('Falha ao cadastrar usuário!');
            window.location.href='cadastrarUsuario.html';
        </script>";
    }

?>
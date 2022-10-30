<?php
    session_start();
    include_once('conexao.php');
    include('layout.php');

?>
        <a href="home.php">HOME</a> - <a href="listarAnalises.php">ACOMPANHAR ANÁLISES</a> - <a href="listarTitulos.php">TÍTULOS</a>
        <hr>
        <h2>Cadastrar Título</h2>
        </div>

        <?php
            if (isset ($_SESSION['msg'])) 
            {
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }                    
        ?>

        <form action="enviaTitulo.php" method="post">
            <label>Filme/Série:</label><input type="text" name="titulo" id="" placeholder="Informe um filme ou série"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
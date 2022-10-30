<?php

    include_once('conexao.php');
    include('layout.php');  
    
?>
        <div class="text-center">
            <a href="home.php">HOME</a> - <a href="listarAnalises.php">ACOMPANHAR ANÁLISES</a> - <a href="listarTitulos.php">TÍTULOS</a>
            <hr>
            <h2>Votação</h2>
        </div>

        <?php
            $chamada_titulos = "SELECT * FROM tb_titulos";
            $titulos = mysqli_query($conector, $chamada_titulos);

            while ($row_titulo = mysqli_fetch_assoc($titulos)) 
            {
                echo "Série/Filme: " . $row_titulo['titulo'] . "<br>";
                echo "<a href='recomenda.php?id=".$row_titulo['id']."'>Recomenda</a> | ";
                echo "<a href='nao-recomenda.php?id=".$row_titulo['id']."'>Não Recomenda</a> | ";
                echo "<a href='listarAnalises.php?'>Acompanhar Resultados</a><br><hr>";
            }
        ?>

    </body>
</html>
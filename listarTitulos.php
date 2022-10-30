<?php

    include_once('conexao.php');
    include('layout.php');  
    
?>
        <div class="text-center">
            <a href="home.php">HOME</a> - <a href="listarAnalises.php">ACOMPANHAR ANÁLISES</a>
            <hr>
            <h2>Títulos Cadastrados</h2>
        </div>

        <table rules="all">

            <thead>
                <tr>
                    <th>Título </th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody>

               <?php
                     $sql_consulta=mysqli_query($conector, "SELECT * FROM tb_titulos");

                     while ($dados=mysqli_fetch_array($sql_consulta)) 
                     {
                        ?>
                            <tr>
                                <td><?= $dados[1] ?></td>
                                <td><a href="excluir.php?id=<?= $dados[0] ?>">Excluir</a></td>
                            </tr>
                        <?php
                     }
               ?>

            </tbody>

        </table>

        <br><button><a href="cadastrarTitulo.php">Cadastrar Título</a></button>

    </body>
</html>
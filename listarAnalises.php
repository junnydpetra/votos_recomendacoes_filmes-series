<?php

    include_once('conexao.php');
    include('layout.php');  
    
?>
        <div class="text-center">
            <a href="home.php">HOME</a> - <a href="listarTitulos.php">TÍTULOS</a>
            <hr>
            <h2>Resultados</h2>
        </div>

        <table rules="all">

            <thead>
                <tr>
                    <th>Título </th>
                    <th>Recomendam</th>
                    <th>Não Recomendam</th>
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
                                <td><?= $dados[3] ?></td>
                                <td><?= $dados[4] ?></td>
                            </tr>
                        <?php
                     }
               ?>

            </tbody>

        </table>

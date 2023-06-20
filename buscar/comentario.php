<?php

        //     // Verifica se a pesquisa foi submetida
        //     if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
        //         $pesquisa = $_GET['pesquisa'];
                
        //         // Consulta os itens relacionados à pesquisa
        //         $sql = "SELECT * FROM tabela WHERE nome LIKE '%$pesquisa%'";
        //         $resultado = $conexao->query($sql);
                    
        //         // Verifica se existem resultados
        //         if ($resultado->num_rows > 0) {
        //             // echo "<div class='titulo'>";
        //             // echo "<h3 class='r-titulo'>Resultado:</h3>";
        //             // echo "</div>";
        //             $count = 0;
        //             while ($linha = $resultado->fetch_assoc()) {
        //                 // echo "<div class='container--itens--1'>";
        //                 echo "<div class='iten'>";
        //                 echo "<img class='img' src='data:" . $linha["imagem_tipo"] . ";base64," . base64_encode($linha["imagem"]) . "' alt='" . $linha["imagem_nome"] . "'>";
        //                 echo "<div class='nome--item'>";
        //                 echo "<p>".$linha["nome"]."</p>";
        //                 echo "</div>";
        //                 echo "<div class='container--info'>";
        //                 echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $linha["nota"] ."</p>";
        //                 echo "<p class='categoria'><img src='./assets/categories.png'>". $linha["categoria"] ."</p>";
        //                 echo "</div>";
        //                 echo "<button class='btn'><a href='../../nPage/index.php?id=" . $linha["id"] . "''>Ver detalhes</a></button>";
        //                 echo "</div>";
        //             }
        //         } else {
        //             echo "<p>Nenhum resultado encontrado, verifique os campos e tente novamente</p>";
        //         };         
        // } elseif (isset($_GET['pesquisa']) && empty($_GET['pesquisa'])) {
        //     echo "<p style='margin-top: 23px;'>Por favor, digite algo para pesquisar.</p>";
        // };
        // 

            //     //mostrando os items com maior notas 
            //     $sql = "SELECT * FROM tabela ORDER BY nota DESC LIMIT 10";
            //     $resultado = $conexao->query($sql);

            //     // Verifica se existem dados na tabela
            //         if ($resultado->num_rows > 0) {
            //             // Cria os containers e os cards
            //             $count = 0;
            //             while ($linha = $resultado->fetch_assoc()) {
            //                 if ($count % 20 == 0) {
            //                     echo "<div class='container--itens--mlhrs2'>";
            //                 }
                            
            //                 echo "<div class='iten'>";
            //                 echo "<img class='img' src='data:" . $linha["imagem_tipo"] . ";base64," . base64_encode($linha["imagem"]) . "' alt='" . $linha["imagem_nome"] . "'>";
            //                 echo "<div class='nome--item'>";
            //                 echo "<p>".$linha["nome"]."</p>";
            //                 echo "</div>";
            //                 echo "<div class='container--info'>";
            //                 echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $linha["nota"] ."</p>";
            //                 echo "<p class='categoria'><img src='./assets/categories.png'>". $linha["categoria"] ."</p>";
            //                 echo "</div>";
            //                 echo "<button class='btn'><a href='../../nPage/index.php?id=" . $linha["id"] . "''class='button'>Ver detalhes</a></button>";
            //                 echo "</div>";
                            
            //                 $count++;
            //                 if ($count % 20 == 0) {
            //                     echo "</div>";
            //                 }
            //                 }
            //                 // Fecha o container se o número total de cards não for múltiplo de 5
            //                 if ($count % 20 != 0) {
            //                 echo "</div>";
            //                 }
            //         } else {
            //             echo "Não há dados na tabela.";
            //         }
                


            //  -->

        
        
        ?>
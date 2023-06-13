<?php

    include('../../config/conexao.php');





    $sql = "SELECT texto, imagem_nome, imagem_tipo, imagem FROM tabela";
    $resultado = $conexao->query($sql);

    // Verifica se houve algum erro ao consultar os dados
    if (!$resultado) {
    die("Erro ao consultar os dados no banco de dados: " . $conexao->error);
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header class="container--header">
        <div class="container--logo">
            <h1>Opinião.com</h1>
        </div>
        <nav class="nav--menu">
            <ul>
                <li><a class="categoria--a" href="../../buscar/index.php">Buscar</a></li>
                <li><a class="categoria--a" href="../../cadastrar/index.php">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    <h2 class="sub--titulo">Melhores Avaliados</h2>
    <section class="container--itens">
        <div class="container--itens--mlhrs1">
            <?php
            //mostrando os items com maior notas 

                    $sql = "SELECT * FROM tabela ORDER BY nota DESC LIMIT 10";
                    $resultado = $conexao->query($sql);

                    // Verifica se existem dados na tabela
                        if ($resultado->num_rows > 0) {
                            // Cria os containers e os cards
                            $count = 0;
                            while ($linha = $resultado->fetch_assoc()) {
                                if ($count % 20 == 0) {
                                    echo "<div class='container--itens--mlhrs1'>";
                                }
                                echo "<div class='iten'>";
                                echo "<img class='img' src='data:" . $linha["imagem_tipo"] . ";base64," . base64_encode($linha["imagem"]) . "' alt='" . $linha["imagem_nome"] . "'>";
                                echo "<div class='nome--item'>";
                                echo "<p>".$linha["nome"]."</p>";
                                echo "</div>";
                                echo "<div class='container--info'>";
                                echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $linha["nota"] ."</p>";
                                echo "<p class='categoria'><img src='./assets/categories.png'>". $linha["categoria"] ."</p>";
                                echo "</div>";
                                echo "<button><a href='../../nPage/index.php?id=" . $linha["id"] . "''class='button'>Ver detalhes</a></button>";
                                echo "</div>";
                                
                                 $count++;
                                if ($count % 20 == 0) {
                                    echo "</div>";
                                }
                                }
                                // Fecha o container se o número total de cards não for múltiplo de 5
                                if ($count % 20 != 0) {
                                echo "</div>";
                                }
                        } else {
                            echo "Não há dados na tabela.";
                        }
                     
            ?>
    </section>
    <footer>
        &copy;VictorRodrigues
    </footer>
</body>
</html>
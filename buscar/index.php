<?php
include('../config/conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header class="container--header">
            <div class="container--logo">
                <h1>Opinião.com</h1>
            </div>
            <nav class="nav--menu">
                <ul>
                    <li><a class="categoria--a" href="../../cadastrar/index.php">Cadastrar</a></li>
                </ul>
            </nav>
    </header>
    <section class='container--buscar'>
        <form method="GET" action="" class='form'>
            <input id='pesquisa' type="text" name="pesquisa" placeholder="Busque um item">
            <input class='btn--pesq' type="submit" value="Buscar">
        </form>
    </section>
    
    <section class="container--itens">
        <h2></h2>
        <div class="container--itens--mlhrs1">

        <?php
                        // Consulta os itens melhores avaliados
            $sql = "SELECT * FROM tabela ORDER BY nota DESC";
            $resultado = $conexao->query($sql);

            // Verifica se existem resultados
            if ($resultado->num_rows > 0) {
                // Verifica se a pesquisa foi realizada
                if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
                $pesquisa = $_GET['pesquisa'];

                while ($linha = $resultado->fetch_assoc()) {
                    // Verifica se o item corresponde à pesquisa
                    if (strpos($linha['nome'], $pesquisa) !== false) {
                    exibirItem($linha);
                    }
                }
                } else {

                while ($linha = $resultado->fetch_assoc()) {
                    exibirItem($linha);
                }
                }
            } else {
                echo "<p>Nenhum item encontrado.</p>";
            }

            // Fecha a conexão com o banco de dados
            $conexao->close();

            // Função para exibir os detalhes do item
            function exibirItem($item) {
                echo "<div class='iten'>";
                echo "<img class='img' src='data:" . $item["imagem_tipo"] . ";base64," . base64_encode($item["imagem"]) . "' alt='" . $item["imagem_nome"] . "'>";
                echo "<div class='nome--item'>";
                echo "<p>".$item["nome"]."</p>";
                echo "</div>";
                echo "<div class='container--info'>";
                echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $item["nota"] ."</p>";
                echo "<p class='categoria'><img src='./assets/categories.png'>". $item["categoria"] ."</p>";
                echo "</div>";
                echo "<button class='btn'><a href='../../nPage/index.php?id=" . $item["id"] . "''>Ver detalhes</a></button>";
                echo "</div>";
            }


            ?>
        </div> 
    </section>
    <script src='./js/buscar.js'></script>
    <script src="./js/limpar-input.js"></script>
    <script>
        alert('')
    </script>
</body>
</html>
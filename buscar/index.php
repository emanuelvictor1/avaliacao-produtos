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
            <input type="text" name="pesquisa" placeholder="Busque um item">
            <input class='btn--pesq' type="submit" value="Buscar">
        </form>
    </section>
    
    <section class="container--itens">
        <div class="container--itens--mlhrs1">
            <?php
                // Verifica se a pesquisa foi submetida
                if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
                        $pesquisa = $_GET['pesquisa'];
                        
                        // Consulta os itens relacionados à pesquisa
                        $sql = "SELECT * FROM tabela WHERE nome LIKE '%$pesquisa%'";
                        $resultado = $conexao->query($sql);

                        // Verifica se existem resultados
                        if ($resultado->num_rows > 0) {
                            echo "<h3 class='r-titulo'>Resultado:</h3>";
                            $count = 0;
                            while ($linha = $resultado->fetch_assoc()) {
                                // echo "<div class='container--itens--1'>";
                                echo "<div class='iten'>";
                                echo "<img class='img' src='data:" . $linha["imagem_tipo"] . ";base64," . base64_encode($linha["imagem"]) . "' alt='" . $linha["imagem_nome"] . "'>";
                                echo "<div class='nome--item'>";
                                echo "<p>".$linha["nome"]."</p>";
                                echo "</div>";
                                echo "<div class='container--info'>";
                                echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $linha["nota"] ."</p>";
                                echo "<p class='categoria'><img src='./assets/categories.png'>". $linha["categoria"] ."</p>";
                                echo "</div>";
                                echo "<button class='btn'><a href='../../nPage/index.php?id=" . $linha["id"] . "''>Ver detalhes</a></button>";
                                echo "</div>";
                            }
                                echo "<div class='container--button'>";
                                echo "<button><img class='next-icon' src='./assets/next.png'></button>";
                                // echo "</div>";
                        } else {
                            echo "<p>Nenhum resultado encontrado, verifique os campos e tente novamente</p>";
                        };         
                } elseif (isset($_GET['pesquisa']) && empty($_GET['pesquisa'])) {
                    echo "<p>Por favor, digite algo para pesquisar.</p>";
                };

            ?>
        </div>
    </section>
    <script>
    // Limpa o campo de pesquisa ao recarregar a página
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href.split('?')[0]);
    }
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  
</head>
<body>
    <header class="container--header">
        <div class="container--logo">
        <h1><a href="../../home/html/index.php">Opinião.com</a></h1>
        </div>
        <nav class="nav--menu">
            <ul>
                <li><a class="categoria--a" href="../../categorias/index.php">Categorias</a></li>
                <li><a class="categoria--a" href="../../cadastrar/index.php">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    <section class="container--dados">
    <?php
      include('../config/conexao.php');

          // Verifica se foi fornecido um ID válido na URL
          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            // Seleciona o item com base no ID fornecido
            $sql = "SELECT * FROM tabela WHERE id = $id";
            $resultado = $conexao->query($sql);

            // Verifica se o item existe
            if ($resultado->num_rows > 0) {
              $linha = $resultado->fetch_assoc();
              echo "<section class='container--section1'>";
              echo "<img class='img' src='data:" . $linha["imagem_tipo"] . ";base64," . base64_encode($linha["imagem"]) . "' alt='" . $linha["imagem_nome"] . "'>";
              echo "<div class='nome--item'>";
              echo "<p>Nome: ".$linha["nome"]."</p>";
              echo "</div>";
              echo "<div class='container--info'>";
              echo "<p class='nota'><img src='./assets/star.png' alt='nota'>". $linha["nota"] ."</p>";
              echo "<p class='categoria'><img src='./assets/categories.png'>". $linha["categoria"] ."</p>";
              echo "</div>";
              echo "<div class='container--descricao'>";
              echo "<div class='mini--menu'>";
              echo "<p class='p--descricao'>Descrição:</p>";
              echo "<button  onclick='menuOpen1()'><img class='down--button' src='./assets/option.png'></button>";
              echo "</div>";
              echo "<div class='desc'>";
              echo "<p class='descricao'>" . $linha["texto"] ."</p>";
              echo "</div>";
              echo "</div>";
              echo "<div class='container--opiniao'>";
              echo "<div class='mini--menu'>";
              echo "<p class='p--opiniao'>Opinião:</p>";
              echo "<button  onclick='menuOpen2()'><img class='down--button2' src='./assets/option.png'></button>";
              echo "</div>";
              echo "<div class='desc2'>";
              echo "<p class='opiniao'>" . $linha["opiniao"] ."</p>";
              echo "</div>";
              echo "</div>";
              echo "</section>";
              } else {
              echo "<p>Item não encontrado.</p>";
            }

            // Fecha a conexão com o banco de dados
            $conexao->close();
          } else {
            echo "<p>ID inválido.</p>";
          }
      ?>
    </section>  
    <footer>&copy;VictorRodrigues</footer>


    <script src='./js/mini-menu.js'></script>
</body>
</html>
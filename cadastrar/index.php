<?php

include('../config/conexao.php')

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header class="container--header">
        <div class="container--logo">
            <h1><a href="../../home/html/index.php">Opinião.com</a></h1>
        </div>
        <nav class="nav--menu">
            <ul>
                <li><a href="#">Categorias</a></li>
            </ul>
        </nav>
    </header>
    <main class="container--main">
        <div class="container--img">
            <form method="post" enctype="multipart/form-data" class="container--form">
                <label class="text--img" for="imagem">Selecione a imagem:</label>
                <div class="container--input--img">
                    <input type="file" name="imagem" id="imagem">
                </div>
                <div id="img--container">
                    <img id="preview" src="">
                    <p class='nome-item'>Nome do Item:</p>
                    <input class="nome" type="text" name="nome" id="nome">
                </div>
                <div class="container--input1">
                    <label for="texto">Digite uma descrição do item:</label>
                    <textarea name="texto" id="texto" placeholder="Ano, marca, modelo ...." cols="30" rows="5"></textarea>
                </div>
                <div class="container--input2">
                    <label for="texto">Deixe sua opinião sobre esse item</label>
                    <textarea name="opiniao" id="opiniao" cols="30" rows="5"></textarea>
                </div>
                <div class="container--input3">
                    <div class="container--select1">
                        <label for="texto">Nota <img src="./assets/star.png" alt="">:</label>
                        <select name="nota" id="nota">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="container--select2">
                        <label for="texto">Categoria <img src="./assets/categories.png" alt="">:</label>
                        <select name="categoria" id="categoria">
                            <option value="ferramentas">Ferramentas</option>
                            <option value="futebol">Futebol</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="automovel">Automóvel</option>
                        </select>
                    </div>
                
                </div>

                <input class="button--enviar" type="submit" value="Cadastrar">
            </form>
        </div>
        <?php
            // Verifica se um arquivo de imagem foi enviado
            if (isset($_FILES["imagem"])) {
                $imagem = $_FILES["imagem"]["tmp_name"];
                $imagem_nome = $_FILES["imagem"]["name"];
                $imagem_tipo = $_FILES["imagem"]["type"];
        
                // Verifica se o arquivo é uma imagem
                if ($imagem_tipo == "image/jpeg" || $imagem_tipo == "image/png") {
                    // Dados do formulário
                    $nome = $_POST["nome"];
                    $texto = $_POST["texto"];
                    $nota = $_POST["nota"];
                    $categoria = $_POST["categoria"];
                    $opiniao = $_POST["opiniao"];
                    
        
                // Prepara a imagem para ser armazenada como BLOB no banco de dados
                $imagem_blob = addslashes(file_get_contents($imagem));
        
                // Insere os dados no banco de dados
                $sql = "INSERT INTO tabela (imagem_nome, imagem_tipo, imagem, nome, texto, nota, categoria, opiniao) VALUES ('$imagem_nome', '$imagem_tipo', '$imagem_blob', '$nome', '$texto', '$nota', '$categoria', '$opiniao')";
        
                if ($conexao->query($sql) === TRUE) {
                    echo "<label class='text--img'>Item cadastrado com sucesso!</label>";
                } else {
                    echo "Erro ao cadastrar item: " . $conexao->error;
                }
                } else {
                    echo "<label class='text--error'>Dados invalidos!</label>";
                }
            }

        ?>
    </main>
    <script src='./js/mostrarImg.js'></script>
</body>
</html>
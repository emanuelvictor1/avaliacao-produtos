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
                    echo "<script>alert('Item cadastrado com sucesso!')</script>";
                } else {
                    echo "Erro ao cadastrar item: " . $conexao->error;
                }
                } else {
                    echo "<label class='text--error'>Dados invalidos!</label>";
                }
            }

        ?>
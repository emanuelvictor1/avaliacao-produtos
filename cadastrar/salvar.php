 <?php
// // 
//     include('../config/conexao.php');
//     include('./index.php');

//     // Processa os dados do formulário
//     $texto = $_POST["texto"];
//     $nota = $_POST["nota"];
//     $categoria = $_POST["categoria"];

//     $imagem_nome = $_FILES["imagem"]["name"];
//     $imagem_tipo = $_FILES["imagem"]["type"];
//     $imagem_tamanho = $_FILES["imagem"]["size"];
//     $imagem_tmp = $_FILES["imagem"]["tmp_name"];


//     // Verifica se a imagem foi carregada com sucesso
//     if ($imagem_nome != '') {
//         // Lê o conteúdo da imagem
//         $imagem = file_get_contents($imagem_tmp);
//     }

//     // Salva os dados no banco de dados
//     $stmt = $conexao->prepare("INSERT INTO tabela (texto, imagem_nome, imagem_tipo, imagem_tamanho, imagem, nota, categoria) VALUES (?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssis", $texto, $imagem_nome, $imagem_tipo, $imagem_tamanho, $imagem, $nota, $categoria);
//     $stmt->execute();


//     // Verifica se houve algum erro ao salvar os dados
//     if ($stmt->error) {
//         die("Erro ao salvar os dados no banco de dados: " . $stmt->error);
//     }
     
    
?> 
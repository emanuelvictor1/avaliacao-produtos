<?php

    include('../config/conexao.php');



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Obtém os dados do formulário
        $texto = $_POST["texto"];
        $imagem_nome = $_FILES["imagem"]["name"];
        $imagem_tipo = $_FILES["imagem"]["type"];
        $imagem_tamanho = $_FILES["imagem"]["size"];
        $imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);
    
        // Exibe a imagem
        echo "<img src='data:$imagem_tipo;base64," . base64_encode($imagem) . "' alt='$imagem_nome'>";
    }

?>
<?php

    // Configurações do banco de dados
    $servidor = "localhost";
    $banco = "tabela";
    $usuario = "root";
    $senha = "";

    // Conexão com o banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifica se a conexão foi bem sucedida
    if ($conexao->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
    }    
?>
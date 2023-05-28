

<?php

    include('../config/conexao.php');




    // Consulta os dados cadastrados
    $sql = "SELECT texto, imagem_nome, imagem_tipo, imagem_tamanho, imagem FROM tabela";
    $resultado = $conexao->query($sql);

    // Verifica se houve algum erro ao consultar os dados
    if (!$resultado) {
    die("Erro ao consultar os dados no banco de dados: " . $conexao->error);
    }

    // Exibe os dados em uma tabela HTML
    echo "<table>";
    echo "<tr><th>Texto</th><th>Imagem</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["texto"] . "</td>";
    echo "<td><img src='data:" . $row["imagem_tipo"] . ";base64," . base64_encode($row["imagem"]) . "' width='100'></td>";
    echo "</tr>";
    }
    echo "</table>";
?>
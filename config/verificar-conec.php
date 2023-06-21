<?php


include('conexao.php');





$sql = "SELECT texto, imagem_nome, imagem_tipo, imagem FROM tabela";
$resultado = $conexao->query($sql);

// Verifica se houve algum erro ao consultar os dados
if (!$resultado) {
die("Erro ao consultar os dados no banco de dados: " . $conexao->error);
}

?>
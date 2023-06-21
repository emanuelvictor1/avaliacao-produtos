<?php

    include('../../config/verificar-conec.php');

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
                <h1><a href="../../index.php">Opinião.com</a></h1>
            </div>
            <nav class="nav--menu">
                <ul>
                    <li><a class="categoria--a" href="../../cadastrar/index.php">Cadastrar</a></li>
                </ul>
            </nav>
    </header>
    <?php
        include('../../components/menu-mob.php');
    ?>
    <section class='container--buscar'>
        <form method="GET" action="" class='form'>
            <input id='pesquisa' type="text" name="pesquisa" placeholder="Busque um item">
            <input class='btn--pesq' type="submit" value="Buscar">
        </form>
    </section>
    <section class="container--itens">
        <?php
            include('../../components/container-item.php');
        ?>
    </section>
    <?php
        include('../../components/footer.php')
    ?>
    <!-- <script src="./js/limpar-input.js"></script> -->
    <script src="./js/verificar-input.js"></script>
</body>
</html>
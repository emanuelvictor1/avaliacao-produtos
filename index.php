<?php

    include('./config/verificar-conec.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php 
        include('./components/header.php');
        include('./components/menu-mob.php');
    ?>
    <section class="container--itens">
    <h2 class="sub--titulo">Melhores Avaliados</h2>
    <?php 
        include('./components/container-item.php')
    ?>
    </section>
    <?php 
        include('./components/footer.php')
    ?>
    <script src='./js/menu-mobile.js'></script>
</body>
</html>
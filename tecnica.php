<!DOCTYPE html>
<html lang="ca">

<?php 
    $titol_pagina = "Àrea Tècnica";
    $pagina = "tecnica";
    $seccio = "tecnica1";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Enfaixa't">
    <meta name="author" content="Miquel March">
    <link rel="icon" type="image/x-icon" href="images/pinya.jpg">
    <title><?php echo $titol_pagina; ?></title>
    <link type="text/css" rel="stylesheet" href="css/fontawesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/docs.min.css">

</head>

<body>
    <?php
        include('inc/header.php');
    ?>

    <div class="container-fluid">
        <div class="row flex-xl-nowrap">

            <!--
            <?php
                include('inc/sidebar.php');
            ?>-->

            <main role="main" class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                <div class="jumbotron text-center" style="margin-bottom:0">
                    <h1 class="bd-title"><?php echo $titol_pagina; ?></h1>
                </div>

                <div style="margin-top:30px">
                    <h2>
                        <i class="fas fa-user"></i>
                        <i class="fas fa-users"></i>
                        <i class="fas fa-user-check"></i>
                        <i class="fas fa-user-times"></i>
                        <i class="fas fa-user-edit"></i>
                        <i class="fas fa-user-cog"></i>
                        <i class="fas fa-id-badge"></i>
                        <i class="fas fa-id-card"></i>
                        <i class="fas fa-pencil-ruler"></i>
                        <i class="fas fa-tools"></i>
                        <i class="fas fa-sign-out-alt"></i>
                        <i class="fas fa-building"></i>
                        <i class="fas fa-tree"></i>
                        <i class="fas fa-calculator"></i>
                        <i class="fas fa-trophy"></i>
                        <i class="fas fa-chess-rook"></i>
                        <i class="fas fa-atom"></i>
                        <i class="fas fa-fire"></i>
                        <i class="fas fa-barcode"></i>
                        <i class="fas fa-sitemap"></i>
                        <i class="fas fa-book"></i>
                        <i class="fas fa-comment"></i>
                        <i class="fas fa-save"></i>
                        <i class="fas fa-chart-line"></i>
                        <i class="fas fa-chart-pie"></i>
                        <i class="fas fa-database"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-robot"></i>
                    </h2>
                </div>

            </main>
        </div>
    </div>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="ca">

<?php 
    include("inc/connect.php");
    include("inc/session.php");
    $titol_pagina = "Estadístiques: ".$_SESSION['nom'];
    $pagina = "estadistiques";
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
            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
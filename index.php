<!DOCTYPE html>
<html lang="ca">

<?php 
    session_start();
    if (isset($_SESSION['sessio_iniciada'])){
        if ($_SESSION['sessio_iniciada'] == true){
            header("Location: home.php");
        }
    }
    $titolPagina = "Enfaixa't";
    $pagina = "index";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ena">
    <meta name="author" content="Miquel March">
    <link rel="icon" type="image/x-icon" href="images/pinya.jpg">
    <title><?php echo $titolPagina; ?></title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/fontawesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/docs.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body class="text-center">
    
    <main class="container-fluid">

        <h1 class="text-center div-signin">
            Benvingut/da a <br/> <?php echo $titolPagina; ?>
        </h1>
        <?php
            if (isset($_GET['error_login'])){
        ?>
            <h2 class="text-danger text-center div-signin">
                Usuari/contrasenya incorrectes &#10071;&#65039;
            </h2>
        <?php
            }
        ?>
        <form class="form-signin" method="POST" action="login.php">
            <img class="mb-4" src="images/pinya_gran.jpg" alt="Pinya (Enfaixa't)" width="100" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Inicieu la sessió</h1>
            <label for="inputEmail" class="sr-only">Adreça electrònica</label>
            <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Usuari" required autofocus>
            <label for="inputPassword" class="sr-only">Contrasenya</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contrasenya" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Inicia</button>
        </form>
        <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y'); ?> Enfaixa't</p>
    </main>

    <?php
        include('inc/footer.php');
    ?>
</body>
</html>
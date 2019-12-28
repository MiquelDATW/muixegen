<!DOCTYPE html>
<html lang="ca">

<?php 
    $titolPagina = "Inicieu la sessió";
    $pagina = "index";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Generador de Muixerangues">
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
            Benvingut/da al <br/> Generador de Muixerangues
        </h1>
        <form class="form-signin">
            <img class="mb-4" src="images/pinya_gran.jpg" alt="Pinya (Generador de Muixerangues)" width="100" height="100">
            <h1 class="h3 mb-3 font-weight-normal"><?php echo $titolPagina; ?></h1>
            <label for="inputEmail" class="sr-only">Adreça electrònica</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adreça electrònica" required autofocus>
            <label for="inputPassword" class="sr-only">Contrasenya</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contrasenya" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recorda'm
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Inicia</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2019 Generador de Muixerangues</p>
        </form>
    </main>


    <?php
        include('inc/footer.php');
    ?>
</body>
</html>
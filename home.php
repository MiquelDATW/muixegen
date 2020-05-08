<!DOCTYPE html>
<html lang="ca">

<?php 
    include("inc/conexio.php");
    $titolPagina = "Generador de Muixerangues";
    $pagina = "home";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Generador de Muixerangues">
    <meta name="author" content="Miquel March">
    <link rel="icon" type="image/x-icon" href="images/pinya.jpg">
    <title><?php echo $titolPagina; ?></title>
    <link type="text/css" rel="stylesheet" href="css/fontawesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/docs.min.css">

</head>

<body>
    <?php
        include('inc/header.php');

        $sql1 = "SELECT id, assistencia, actuacio_name, data FROM hr_employee_actuacio WHERE data >= '" . date("Y-m-d") . "' AND employee_id = '" . $_SESSION['user_id'] . "' AND tipus = 'assaig';";
        $sql2 = "SELECT id, assistencia, actuacio_name, data FROM hr_employee_actuacio WHERE data >= '" . date("Y-m-d") . "' AND employee_id = '" . $_SESSION['user_id'] . "' AND tipus = 'actuacio';";
    ?>

    <div class="container-fluid">
        <div class="row flex-xl-nowrap">


            <?php
                include('inc/sidebar.php');
            ?>

            <main role="main" class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                <div class="jumbotron text-center" style="margin-bottom:0">
                    <h1 class="bd-title"><?php echo $titolPagina; ?></h1>
                </div>
                <div style="margin-top:30px">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Notificaciones</h1><hr><h3>Assajos</h3>
                            <?php
                                $result = pg_query($conn, $sql1);
                                while($row = pg_fetch_assoc($result)){
                                    $assistencia = "True";
                                    $faIcon = '<i style="color:green;" class="far fa-check-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:grey;" class="far fa-times-circle"></i>';
                                    if ($row['assistencia'] == 't'){
                                        $assistencia = "False";
                                        $faIcon = '<i style="color:grey;" class="far fa-check-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:red;" class="far fa-times-circle"></i>';
                                    }
                            ?>
                                <div onclick='window.location.href = "actAssistencia.php?id_actuacio=<?php echo $row["id"]?>&user_id=<?php echo $_SESSION['user_id']?>&assistencia=<?php echo $assistencia; ?>"' style="cursor:pointer;"><?php echo $row["actuacio_name"]; ?> - <?php echo $row["data"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $faIcon; ?></div>
                            <?php
                                }
                            ?><hr><h3>Actuacions</h3>
                            <?php
                                $result = pg_query($conn, $sql2);
                                while($row = pg_fetch_assoc($result)){
                                    $assistencia = "True";
                                    $faIcon = '<i style="color:green;" class="far fa-check-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:grey;" class="far fa-times-circle"></i>';
                                    if ($row['assistencia'] == 't'){
                                        $assistencia = "False";
                                        $faIcon = '<i style="color:grey;" class="far fa-check-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:red;" class="far fa-times-circle"></i>';
                                    }
                            ?>
                                <div onclick='window.location.href = "actAssistencia.php?id_actuacio=<?php echo $row["id"]?>&user_id=<?php echo $_SESSION['user_id']?>&assistencia=<?php echo $assistencia; ?>"' style="cursor:pointer;"><?php echo $row["actuacio_name"]; ?> - <?php echo $row["data"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $faIcon; ?></div>
                            <?php
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
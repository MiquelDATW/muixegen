<!DOCTYPE html>
<html lang="ca">

<?php 
    include("inc/connect.php");
    include("inc/session.php");

    $actuacio = $_GET['actuacio_id'];
    settype($actuacio, 'int');
    $sql1 = "SELECT * FROM pinya_actuacio WHERE id = '" . $actuacio . "';";
    $result = pg_query($conn, $sql1);
    while($row = pg_fetch_assoc($result)){
        $name = $row['name'];
        $data_inici = $row['data_inici'];
        $data_final = $row['data_final'];
        $notes = $row['notes'];
        $zip_id = $row['zip_id'];
        $name = $row['name'];
    }

    $titol_pagina = "Actuació ".$name;
    $pagina = "actuacio";

    $sql1 = "SELECT name FROM res_better_zip WHERE id = '" . $zip_id . "';";
    $result = pg_query($conn, $sql1);
    while($row = pg_fetch_assoc($result)){
        $zip_name = $row['name'];
    }
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

            <main role="main" class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                <div style="margin-top:30px">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Actuació <?php echo $name; ?></h1>
                            <br/>
                            <div class="jumbotron" style="margin-bottom:0">
                                <?php
                                    echo "<p>Inici: ".$data_inici."</p>";
                                    echo "<p>Final: ".$data_final."</p>";
                                    echo "<p>Lloc: ".$zip_name."</p>";
                                ?>
                            </div>
                            <hr/>
                            <table class="table table-dark">
                                <?php
                                    echo "<tr>";
                                    echo "<th>Figura</th>";
                                    echo "<th>Posició</th>";
                                    echo "</tr>";

                                    $sql1 = "SELECT id, name, data, state FROM pinya_muixeranga WHERE actuacio_id = '" . $actuacio . "';";
                                    $result = pg_query($conn, $sql1);
                                    while($row = pg_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$row['name']."</td>";
                                        echo "<td>";
                                        $sql0 = "SELECT id, name, membre_tronc_id FROM pinya_muixeranga_tronc WHERE muixeranga_tronc_id = '". $row['id'] ."' AND membre_tronc_id = '". $_SESSION['emp_id'] ."';";
                                        $result0 = pg_query($conn, $sql0);
                                        while($row0 = pg_fetch_assoc($result0)){
                                            echo $row0['name'];
                                        }
                                        $sql0 = "SELECT id, name, membre_pinya_id FROM pinya_muixeranga_pinya WHERE muixeranga_pinya_id = '". $row['id'] ."' AND membre_pinya_id = '". $_SESSION['emp_id'] ."';";
                                        $result0 = pg_query($conn, $sql0);
                                        while($row0 = pg_fetch_assoc($result0)){
                                            echo $row0['name'];
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                            <hr/>
                            <div style="margin-bottom:0">
                                <?php
                                    echo "<p>".$notes."</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
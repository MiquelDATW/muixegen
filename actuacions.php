<!DOCTYPE html>
<html lang="ca">

<?php 
    include("inc/connect.php");
    include("inc/session.php");
    $titol_pagina = "Actuacions: ".$_SESSION['nom'];
    $pagina = "actuacions";
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

        $sql1 = "SELECT id, assistencia, actuacio_id, data FROM hr_employee_actuacio WHERE data < '" . date("Y-m-d") . "' AND employee_id = '" . $_SESSION['emp_id'] . "' AND tipus = 'actuacio' AND actuacio_id IN (SELECT id FROM pinya_actuacio WHERE data_inici < '" . date("Y-m-d") . "' AND state != 'draft' AND missatge_enviat = 't' AND tipus = 'actuacio') ORDER BY data DESC;";
    ?>

    <div class="container-fluid">
        <div class="row flex-xl-nowrap">


            <!--
            <?php
                include('inc/sidebar.php');
            ?>-->

            <main role="main" class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                <div style="margin-top:30px">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Actuacions passades</h1>
                            <table class="table table-dark">
                                <?php
                                    $result = pg_query($conn, $sql1);
                                    while($row = pg_fetch_assoc($result)){
                                        $assistencia = "True";
                                        if ($row['assistencia'] == 'f'){
                                            $assistencia = "False";
                                        }
                                        echo "<tr>";
                                        $sql0 = "SELECT name, state FROM pinya_actuacio WHERE id = '" . $row['actuacio_id'] . "';";
                                        $result0 = pg_query($conn, $sql0);
                                        while($row0 = pg_fetch_assoc($result0)){
                                        ?>
                                            <td><a href="actuacio.php?actuacio_id=<?php echo $row["actuacio_id"]?>" style="color: white;"><?php echo $row0["name"]?></a></td>
                                        <?php
                                        }
                                        echo "<td>".$row['data']."</td>";
                                        if ($assistencia == "True"){
                                            echo "<td>Vaig assistir <i style='color: green;' class='fas fa-check-square'></i></td>";
                                        }else{
                                            echo "<td>No vaig anar <i style='color: red;' class='fas fa-times-circle'></i></td>";
                                        }
                                        echo "<td>".$row['actuacio_id']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
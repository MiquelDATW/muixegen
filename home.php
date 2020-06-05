<!DOCTYPE html>
<html lang="ca">

<?php 
    include("inc/connect.php");
    include("inc/session.php");
    $titol_pagina = "Enfaixa't: ".$_SESSION['nom'];
    $pagina = "home";
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

        $sql1 = "SELECT id, assistencia, actuacio_id, actuacio_name, data FROM hr_employee_actuacio WHERE data > '" . date("Y-m-d") . "' AND employee_id = '" . $_SESSION['emp_id'] . "' AND tipus = 'assaig' AND actuacio_id IN (SELECT id FROM pinya_actuacio WHERE data_inici > '" . date("Y-m-d") . "' AND state = 'draft' AND missatge_enviat = 't' AND obert = 't' AND tipus = 'assaig') ORDER BY data ASC;";

        $sql2 = "SELECT id, assistencia, actuacio_id, actuacio_name, data FROM hr_employee_actuacio WHERE data > '" . date("Y-m-d") . "' AND employee_id = '" . $_SESSION['emp_id'] . "' AND tipus = 'actuacio' AND actuacio_id IN (SELECT id FROM pinya_actuacio WHERE data_inici > '" . date("Y-m-d") . "' AND missatge_enviat = 't' AND tipus = 'actuacio') ORDER BY data ASC;";

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
                            <h1>Novetats</h1>
                            <hr>
                            <h3>Assajos</h3>
                            <table class="table table-dark">
                                <?php
                                    $result = pg_query($conn, $sql1);
                                    while($row = pg_fetch_assoc($result)){
                                        $assistencia = "True";
                                        if ($row['assistencia'] == 't'){
                                            $assistencia = "False";
                                        }
                                        echo "<tr>";
                                        echo "<td>".$row['actuacio_name']."</td>";
                                        echo "<td>".$row['data']."</td>";
                                        if ($assistencia == "True"){
                                    ?>
                                            <td><b><a href="assistencia.php?actuacio_id=<?php echo $row["id"]?>&emp_id=<?php echo $_SESSION['emp_id']?>&assistencia=<?php echo $assistencia; ?>" style="color: green;">Apuntar-se <i class="fas fa-sign-in-alt"></i></a></b></td>
                                    <?php
                                        }else{
                                    ?>
                                            <td><b><a href="assistencia.php?actuacio_id=<?php echo $row["id"]?>&emp_id=<?php echo $_SESSION['emp_id']?>&assistencia=<?php echo $assistencia; ?>" style="color: red;">Esborrar-se <i class="fas fa-sign-out-alt"></i></a></b></td>
                                    <?php
                                        }
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                            <hr>
                            <h3>Actuacions</h3>
                            <table class="table table-dark">
                                <?php
                                    $result = pg_query($conn, $sql2);
                                    while($row = pg_fetch_assoc($result)){
                                        $assistencia = "True";
                                        if ($row['assistencia'] == 't'){
                                            $assistencia = "False";
                                        }
                                        echo "<tr>";
                                        ?>
                                            <td><a href="actuacio.php?actuacio_id=<?php echo $row["actuacio_id"]?>" style="color: white;"><?php echo $row["actuacio_name"]?></a></td>
                                        <?php
                                        echo "<td>".$row['data']."</td>";
                                        if ($assistencia == "True"){
                                    ?>
                                            <td><b><a href="assistencia.php?actuacio_id=<?php echo $row["id"]?>&emp_id=<?php echo $_SESSION['emp_id']?>&assistencia=<?php echo $assistencia; ?>" style="color: green;">Apuntar-se <i class="fas fa-sign-in-alt"></i></a><b></td>
                                    <?php
                                        }else{
                                    ?>
                                            <td><b><a href="assistencia.php?actuacio_id=<?php echo $row["id"]?>&emp_id=<?php echo $_SESSION['emp_id']?>&assistencia=<?php echo $assistencia; ?>" style="color: red;">Esborrar-se <i class="fas fa-sign-out-alt"></i></a></b></td>
                                    <?php
                                        }
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                            <hr>
                        </div>

                    </div>
                </div>
            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>
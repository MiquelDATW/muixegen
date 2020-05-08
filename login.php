<?php
    session_start();
    include("inc/conexio.php");
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT u.password_crypt, u.id, e.name FROM res_users u, hr_employee e WHERE e.id = u.id AND login = '" . $user . "';";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    if (md5($password) == $row['password_crypt']){
        //iniciar session
        $_SESSION['sesionIniciada'] = true;
        $_SESSION['nom'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];

        header("Location: home.php");
    }else{
        header("Location: index.php?errorLogin=1");
    }
?>
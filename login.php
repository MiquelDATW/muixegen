<?php
    session_start();

    include("inc/connect.php");

    $user = $_POST['user'];
    $password = $_POST['password'];

    // $sql = "SELECT u.password_crypt, u.id, e.name FROM res_users u, hr_employee e WHERE e.id = u.id AND login = '" . $user . "';";
    $sql = "SELECT u.password_crypt, u.id, u.partner_id FROM res_users u WHERE login = '" . $user . "';";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    
    if (md5($password) == $row['password_crypt']){
        //iniciar sessió
        $_SESSION['sessio_iniciada'] = true;
        $_SESSION['partner_id'] = $row['partner_id'];

        $sql = "SELECT h.id, h.name FROM hr_employee h WHERE address_home_id = " . $row['partner_id'] . ";";
        $result = pg_query($conn, $sql);
        $row2 = pg_fetch_assoc($result);

        $_SESSION['nom'] = $row2['name'];
        $_SESSION['emp_id'] = $row2['id'];

        header("Location: home.php");
    }else{
        header("Location: index.php?error_login=1");
    }
?>
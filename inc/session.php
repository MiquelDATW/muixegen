<?php
    session_start();
    if (isset($_SESSION['sessio_iniciada'])){
        if ($_SESSION['sessio_iniciada'] == false){
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
?>
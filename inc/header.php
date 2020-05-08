<?php
    session_start();
    if (isset($_SESSION['sesionIniciada'])){
        if ($_SESSION['sesionIniciada'] == false){
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
?>
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

    <nav class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item <?php if($pagina =='index'){echo 'active';}?>">
                <a class="nav-link" href="logout.php"><i class="fas fa-user-alt-slash"></i></a>
            </li>
            <li class="nav-item <?php if($pagina =='home'){echo 'active';}?>">
                <a class="nav-link" href="home.php"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item <?php if($pagina =='tecnica'){echo 'active';}?>">
                <a class="nav-link" href="tecnica.php"><i class="fas fa-pencil-ruler"></i></a>
            </li>
            <li class="nav-item <?php if($pagina !='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Muixeranguers/es</a>
            </li>
            <li class="nav-item <?php if($pagina !='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Figures</a>
            </li>
            <li class="nav-item <?php if($pagina !='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Assajos</a>
            </li>
            <li class="nav-item <?php if($pagina !='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Actuacions</a>
            </li>
            <li class="nav-item <?php if($pagina !='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Estadístiques</a>
            </li>
            <li class="nav-item <?php if($pagina =='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Muixeranguer/a</a>
            </li>
            <li class="nav-item <?php if($pagina =='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Colla</a>
            </li>
            <li class="nav-item <?php if($pagina =='tecnica'){echo 'd-none';}?>">
                <a class="nav-link" href="#">Novetats</a>
            </li>
        </ul>
    </nav>

    <p class="d-none">Generador de Muixerangues</p>
</header>

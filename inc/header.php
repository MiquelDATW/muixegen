
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

    <nav class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fas fa-user-alt-slash"></i></a>
            </li>
            <li class="nav-item <?php if($pagina == 'home'){echo 'active';}?>">
                <a class="nav-link" href="home.php"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item <?php if($pagina == 'tecnica'){echo 'active';}?>">
                <a class="nav-link" href="tecnica.php"><i class="fas fa-pencil-ruler"></i></a>
            </li>
            <li class="nav-item <?php if($pagina == 'assajos'){echo 'active';}?>">
                <a class="nav-link" href="assajos.php"><i class="fas fa-dumbbell"></i></a>
            </li>
            <li class="nav-item <?php if($pagina =='actuacions'){echo 'active';}?>">
                <a class="nav-link" href="actuacions.php"><i class="fas fa-trophy"></i></a>
            </li>
            <li class="nav-item <?php if($pagina =='missatges'){echo 'active';}?>">
                <a class="nav-link" href="missatges.php"><i class="fas fa-comment"></i></a>
            </li>
            <li class="nav-item <?php if($pagina =='estadistiques'){echo 'active';}?>">
                <a class="nav-link" href="estadistiques.php"><i class="fas fa-chart-line"></i></a>
            </li>
        </ul>
    </nav>

    <p class="d-none">Enfaixa't</p>
</header>

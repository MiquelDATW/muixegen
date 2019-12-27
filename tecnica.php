<!DOCTYPE html>
<html lang="ca">

<?php 
    $titolPagina = "Àrea Tècnica";
    $pagina = "tecnica";
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

			    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:30px">
			        <ol class="carousel-indicators">
			            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			            <li data-target="#myCarousel" data-slide-to="1"></li>
			            <li data-target="#myCarousel" data-slide-to="2"></li>
			            <li data-target="#myCarousel" data-slide-to="3"></li>
			            <li data-target="#myCarousel" data-slide-to="4"></li>
			        </ol>
			        <div class="carousel-inner">
			            <div class="carousel-item active">
			                <img src="images/m_01.jpg" alt="Muixeranguers/es">
			                <div class="container">
			                    <div class="carousel-caption text-left">
			                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Muixeranguers/es</a></p>
			                    </div>
			                </div>
			            </div>
			            <div class="carousel-item">
			                <img src="images/m_02.jpg" alt="Figures">
			                <div class="container">
			                    <div class="carousel-caption text-left">
			                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Figures</a></p>
			                    </div>
			                </div>
			            </div>
			            <div class="carousel-item">
			                <img src="images/m_03.jpg" alt="Assajos">
			                <div class="container">
			                    <div class="carousel-caption text-left">
			                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Assajos</a></p>
			                    </div>
			                </div>
			            </div>
			            <div class="carousel-item">
			                <img src="images/m_04.jpg" alt="Actuacions">
			                <div class="container">
			                    <div class="carousel-caption text-left">
			                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Actuacions</a></p>
			                    </div>
			                </div>
			            </div>
			            <div class="carousel-item">
			                <img src="images/m_05.jpg" alt="Estadístiques">
			                <div class="container">
			                    <div class="carousel-caption text-left">
			                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Estadístiques</a></p>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			            <span class="carousel-control-next-icon" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>

            </main>

    <?php
        include('inc/footer.php');
    ?>
</body>

</html>

<div class="col-12 col-md-3 col-xl-2 bd-sidebar">

    <form class="bd-search d-flex align-items-center">
        <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
        </button>
    </form>

    <nav class="collapse bd-links" id="bd-docs-nav">
        <div class="bd-toc-item <?php if($pagina != 'tecnica'){echo 'd-none';}?> <?php if($pagina == 'tecnica'){echo 'active';}?>">
            <a class="bd-toc-link" href="tecnica.php">
                About
            </a>
            <ul class="nav bd-sidenav">
                <li class="<?php if($seccio == 'tecnica1'){echo 'active bd-sidenav-active';}?>">
                    <a href="tecnica.php">Overview</a>
                </li>
                <li class="<?php if($seccio == 'tecnica2'){echo 'active bd-sidenav-active';}?>">
                    <a href="tecnica.php">Brand</a>
                </li>
                <li class="<?php if($seccio == 'tecnica3'){echo 'active bd-sidenav-active';}?>">
                    <a href="tecnica.php">License</a>
                  </li>
                <li class="<?php if($seccio == 'tecnica4'){echo 'active bd-sidenav-active';}?>">
                    <a href="tecnica.php">Translations</a>
                </li>
            </ul>
        </div>
        <div class="bd-toc-item <?php if($pagina != 'assajos'){echo 'd-none';}?> <?php if($pagina == 'assajos'){echo 'active';}?>">
            <a class="bd-toc-link" href="/docs/4.1/getting-started/introduction/">
                Getting started
            </a>
            <ul class="nav bd-sidenav">
                <li>
                    <a href="/docs/4.1/getting-started/introduction/">Introduction</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/download/">Download</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/contents/">Contents</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/browsers-devices/">Browsers & devices</a>
                </li>
            </ul>
        </div>
        <div class="bd-toc-item <?php if($pagina != 'actuacions'){echo 'd-none';}?> <?php if($pagina == 'actuacions'){echo 'active';}?>">
            <a class="bd-toc-link" href="/docs/4.1/getting-started/introduction/">
                Getting started
            </a>
            <ul class="nav bd-sidenav">
                <li>
                    <a href="/docs/4.1/getting-started/introduction/">Introduction</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/download/">Download</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/contents/">Contents</a>
                </li>
                <li>
                    <a href="/docs/4.1/getting-started/browsers-devices/">Browsers & devices</a>
                </li>
            </ul>
        </div>
        <div class="bd-toc-item <?php if($pagina != 'missatges'){echo 'd-none';}?> <?php if($pagina == 'missatges'){echo 'active';}?>">
            <a class="bd-toc-link" href="missatges.php">
                About
            </a>
            <ul class="nav bd-sidenav">
                <li class="<?php if($seccio == 'missatges1'){echo 'active bd-sidenav-active';}?>">
                    <a href="missatges.php">Overview</a>
                </li>
                <li class="<?php if($seccio == 'missatges2'){echo 'active bd-sidenav-active';}?>">
                    <a href="missatges.php">Brand</a>
                </li>
                <li class="<?php if($seccio == 'missatges3'){echo 'active bd-sidenav-active';}?>">
                    <a href="missatges.php">License</a>
                  </li>
                <li class="<?php if($seccio == 'missatges4'){echo 'active bd-sidenav-active';}?>">
                    <a href="missatges.php">Translations</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

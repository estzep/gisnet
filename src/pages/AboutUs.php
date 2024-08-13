<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<header class="aboutUs">
    <div class="container">
        <div class="content">
            <h2>Sobre Gisnet</h2>
            <p class="text-1 subtitle"> Apasionados por la modernización de nuestros clientes a través de servicios de calidad </p>
        </div>
    </div>
</header>
<section class="aboutUs">
    <div class="section-container container">
        <div class="content">
            <h3>¿Qué nos hace diferentes?</h3>
            <p class="text-2">
                Nos distinguimos por nuestra innovación y soluciones a medida, priorizando las necesidades únicas de cada cliente. Uniendo experiencia con creatividad, no solo enfrentamos desafíos actuales sino que preparamos a las organizaciones para el futuro, forjando relaciones sólidas basadas en la confianza y la excelencia.
            </p>
        </div>
    </div>
</section>
<section id="clientes">
    <div class="section-container container">
        <div class="content">
            <h5>Nuestros clientes</h5>
            <div class="slider">
                <div class="overlay"></div>
                <div class="track">
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-bbva-colored.png" alt="BBVA logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-cecoban-colored.png" alt="Cecoban logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-diebold-nixdorf-colored.png" alt="Diebold Nixdorf logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-gbo-gto-colored.png" alt="Gobierno de Guanajuato logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-gbo-nl-colored.png" alt="Goierno de Nuevo León logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-santander-colored.png" alt="Santander logo">
                    </div>
                    <!-- repeat -->
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-bbva-colored.png" alt="BBVA logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-cecoban-colored.png" alt="Cecoban logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-diebold-nixdorf-colored.png" alt="Diebold Nixdorf logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-gbo-gto-colored.png" alt="Gobierno de Guanajuato logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-gbo-nl-colored.png" alt="Goierno de Nuevo León logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logos-colored/logo-santander-colored.png" alt="Santander logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

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
<section id="summary">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3>¿Qué nos hace diferentes?</h3>
                <p class="text-1">
                    Nos distinguimos por nuestra innovación y soluciones a medida, priorizando las necesidades únicas de cada cliente. Uniendo experiencia con creatividad, no solo enfrentamos desafíos actuales sino que preparamos a las organizaciones para el futuro, forjando relaciones sólidas basadas en la confianza y la excelencia.
                </p>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/Clients.php'); ?>
<? include($path.'src/components/Partners.php'); ?>

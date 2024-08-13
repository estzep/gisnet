<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $summaryTitle = "Tranforma tu registro público con procesos modernos";
    $summaryDescription = "e-GISreg es una solución tecnológica capaz de ofrecer un modelo de gestión, eficiente y eficaz, para la atención de los trámites  que sean presentados, de manera remota o en sitio, ante la dependencia. Parametrizable y diseñada bajo los más modernos estándares de desarrollo.";
?>
<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>Gisreg</h1>
                <p class="text-1">
                    Description
                </p>
            </div>
            <div class="image">
                <img src="<? echo $path ?>src/assets/img/sp/placeholder.png" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content">
            Contenido...
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
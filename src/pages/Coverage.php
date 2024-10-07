<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<section id="coverage" class="bg-color-1">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center">Cobertura Nacional</h3>
            <p class="text-2 text-center">
                Gisnet cuenta cuenta con 150 Ingenieros de campo con cobertura a nivel Nacional, capacitados para garantizar el funcionamiento de nuestros equipos.
            </p>
            <div class="coverage-map">
                <img src="<? echo $path ?>src/assets/img/estados-soporte.jpg" alt="Cobertura Nacional">
            </div>
        </div>
    </div>
</section>
<? include('src/components/WhyGisnet.php'); ?>

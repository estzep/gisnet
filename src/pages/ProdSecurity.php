<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "security-scorecard";

    foreach ($data['products'] as $product) {
        if ($product['spname'] === $spname) {
            $headerTitle = $product['headerTitle'];
            $headerDescription = $product['headerDescription'];
            $headerImg = $product['headerImg'];
            $summaryTitle = $product['summaryTitle'];
            $summaryDescription = $product['summaryDescription'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>La herramienta definitiva para la ciberseguridad</h3>
                <p class="text-3">
                    Security Scorecard es el líder mundial en calificaciones de ciberseguridad y el único servicio con millones de organizaciones continuamente calificadas. Miles de organizaciones aprovechan nuestra tecnología de calificación patentada para autovigilancia, gestión de riesgos de terceros, informes de la junta y suscripción de seguros cibernéticos.
                    <br>
                    <br>
                    Pero no paramos ahí. A través de un compromiso centrado en el cliente y basado en soluciones con nuestros socios, estamos transformando el panorama digital construyendo un camino hacia la resiliencia.
                    <br>
                    <br>
                    Obtenga una comprensión completa del riesgo de su superficie de ataque y ecosistema de negocios. Conocer en un instante si una organización merece su confianza y mostrar a otros que se merecen la suya. Desde calificaciones de seguridad y gestión de riesgos de terceros hasta pruebas forenses digitales y respuesta de incidentes, Security Scorecard está aquí para usted. Juntos hacemos del mundo un lugar más seguro.
                </p>
            </div>
            <div class="image f contain">
                <img src="<? echo $path ?>src/assets/img/security-scorecard-img/img-2.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<section class="badges">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center mb-5">Reconocimientos de la industria</h3>
            <div class="badges-container">
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/security-scorecard-img/gartner.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/security-scorecard-img/snowflake.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/security-scorecard-img/momentum.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/security-scorecard-img/global.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/security-scorecard-img/black-unicorn.png" alt="Badge">
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

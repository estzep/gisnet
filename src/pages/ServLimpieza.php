<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/services.json');
    $data = json_decode($jsonString, true);

    $spname = "limpieza-de-datos";

    foreach ($data['services'] as $service) {
        if ($service['spname'] === $spname) {
            $headerTitle = $service['headerTitle'];
            $headerDescription = $service['headerDescription'];
            $headerImg = $service['headerImg'];
            $summaryTitle = $service['summaryTitle'];
            $summaryDescription = $service['summaryDescription'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1">
            <div class="heading">
                <h3>
                    Nuestro proceso de extracción y transformación de datos
                </h3>
                <p class="text-1">
                    Diversas empresas cuentan con bases de datos que pueden tener la información necesaria,  pero a menudo acumulan información redundante, desactualizada o incorrecta. Una base de datos que no se mantiene adecuadamente puede llevar a ineficiencias operativas, errores en la toma de decisiones y pérdida de oportunidades estratégicas.
                </p>
            </div>
            <div class="graph">
                <div class="graph-container">
                    <img src="<? echo($path) ?>src/assets/img/limpieza-img/graphic-limpieza-datos.png" alt="Graph" class="d-none d-md-block">
                    <img src="<? echo($path) ?>src/assets/img/limpieza-img/graphic-limpieza-datos-mobile.png" alt="Graph" class="d-block d-md-none">
                </div>
            </div>
            <ul class="columns quad">
                <il class="column">
                    <h4 class="title">Validación</h4>
                    <p class="text-3">Cada dato pasa por un proceso de validación riguroso para garantizar su precisión y relevancia.</p>
                </il>
                <il class="column">
                    <h4 class="title">Estandarización (Archivo Digital)</h4>
                    <p class="text-3">Normalizamos los datos para que cumplan con formatos estándar y sean coherentes en todo el archivo digital.</p>
                </il>
                <il class="column">
                    <h4 class="title">Integración de los Folios y Actos</h4>
                    <p class="text-3">Consolidamos la información de los folios y actos jurídicos, asegurando la integridad de la secuencia.</p>
                </il>
                <il class="column">
                    <h4 class="title">Listados de Inconsistencias</h4>
                    <p class="text-3">Generamos listados detallados de cualquier inconsistencia encontrada para su revisión y corrección.</p>
                </il>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>Resultados de calidad</h3>
                <ul class="bullet-list lg">
                    <li>
                        <h6 class="subtitle">Precisión Mejorada</h6>
                        <p class="text text-3">
                            La base de datos migrada y limpia cuenta con una precisión significativamente mayor, eliminando errores e inexactitudes.
                        </p>
                    </li>
                    <li>
                        <h6 class="subtitle">Consistencia</h6>
                        <p class="text text-3">
                            Los datos se estandarizan siguiendo un formato uniforme, lo que facilita el análisis y la integración con otros sistemas.
                        </p>
                    </li>
                    <li>
                        <h6 class="subtitle">Optimización de Rendimiento</h6>
                        <p class="text text-3">
                            La base de datos presenta un rendimiento óptimo, con tiempos de respuesta más rápidos y una gestión más eficiente.
                        </p>
                    </li>
                    <li>
                        <h6 class="subtitle">Mayor Seguridad</h6>
                        <p class="text text-3">
                            Garantizando que la información sensible esté protegida y la base de datos sea más confiable y segura para su uso.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="image f t">
                <img src="<? echo $path ?>src/assets/img/limpieza-img/img-2.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
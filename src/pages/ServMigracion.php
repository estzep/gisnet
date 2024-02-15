<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/services.json');
    $data = json_decode($jsonString, true);

    $spname = "migracion-de-acervos";

    foreach ($data['services'] as $service) {
        if ($service['spname'] === $spname) {
            $headerTitle = $service['headerTitle'];
            $headerDescription = $service['headerDescription'];
            $headerImg = $service['headerImg'];
            $clientsTitle = $service['clientsTitle'];
            $clientsDescription = $service['clientsDescription'];
            $clients = $service['clients'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="section-container container">
        <div class="content">
            <h2>La digitalización tiene dos grandes procesos</h2>
            <h3>Digitalización</h3>
            <div class="tabs">
                <div class="column info">
                    <ul role="tablist">
                        <li id="li-tab1" class="active" data-bs-toggle="tab" data-bs-target="#tab-tab1" role="tab" aria-controls="tab-tab1" aria-selected="true">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Migración de acervos</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/migracion-de-acervos/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Transformación de documentales a formatos digitales electrónicos, asegurando la preservación y accesibilidad de información valiosa.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab2" data-bs-toggle="tab" data-bs-target="#tab-tab2" role="tab" aria-controls="tab-tab2" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Implementación de Sistemas</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/implementacion-de-sistemas/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Desarrollo de sistemas Registrales, Catastrales y de Gestión Documental, optimizando procesos y mejorando la eficiencia operativa.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab3" data-bs-toggle="tab" data-bs-target="#tab-tab3" role="tab" aria-controls="tab-tab3" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Limpieza de Datos</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/limpieza-de-datos/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Depuración y saneamiento de bases de datos, eliminando inexactitudes para garantizar la precisión y fiabilidad de la información.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab4" data-bs-toggle="tab" data-bs-target="#tab-tab4" role="tab" aria-controls="tab-tab4" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Desarrollo, Soporte y Mantenimiento</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/desarrollo-soporte-mantenimiento/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Servicios continuos para los sistemas instalados, asegurando su óptimo funcionamiento y actualización constante.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column image tab-content">
                    <div id="tab-tab1" class="panel tab-pane fade show active" role="tabpanel" aria-labelledby="li-tab1" tabindex="0">
                        <img src="src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab2" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab2" tabindex="0">
                        <img src="src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab3" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab3" tabindex="0">
                        <img src="src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab4" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab4" tabindex="0">
                        <img src="src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
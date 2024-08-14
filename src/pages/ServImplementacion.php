<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/services.json');
    $data = json_decode($jsonString, true);

    $spname = "implementacion-de-sistemas";

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
<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1><? echo $headerTitle ?></h1>
                <p class="text-1">
                    <? echo $headerDescription ?>
                </p>
                <div class="links">
                    <a href="<? echo $path ?>contacto" class="btn-type-1 f-btn">
                        Quiero comenzar
                    </a>
                    <a href="<? echo $path ?>files/implementacion-de-sistemas.pdf" class="btn-type-6 s-btn">
                        Ver certificado ISO 9001:2015
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<? echo $path ?><? echo $headerImg ?>" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content pb-5">
            <h3 class="text-center">
                Los sistemas más
                <br>
                versátiles del mercado
            </h3>
            <div id="implementacion-tabs" class="tabs-2">
                <div class="controls">
                    <button id="btn-registral" class="control active btn-type-7" data-control="registral" onclick="changeTab2(this)" disabled>Gestión Registral</button>
                    <button id="btn-catastral" class="control btn-type-7" data-control="catastral" onclick="changeTab2(this)">Gestión Catastral</button>
                    <button id="btn-documental" class="control btn-type-7" data-control="documental" onclick="changeTab2(this)">Gestión Documental</button>
                </div>
                <div class="tabs-container">
                    <div id="tab-registral" class="tab active">
                        <div class="tab-content">
                            <div class="info">
                                <h4 class="title">Sistema de Gestión Registral e-GISreg</h4>
                                <a href="<? echo($path) ?>servicios/implementacion-de-sistemas/gisreg/" class="btn-type-1">
                                    Ver demo
                                    <span class="arrow">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                    </span>
                                </a>
                                <ul class="text-3 bullet-list">
                                    <li>Dirigido a los <span class="g-strong">Registros Público de la Propiedad</span>.</li>
                                    <li>Procesos estandarizados con las mejores prácticas en la <span class="g-strong">gestión registral</span>.</li>
                                    <li><span class="g-strong">Atención a los usuarios</span> con trámites presenciales y virtuales para grandes usuarios.</li>
                                    <li><span class="g-strong">100% Web</span></li>
                                </ul>
                            </div>
                            <div class="image">
                                <img src="<? echo($path) ?>src/assets/img/sistemas-img/img-2-gisreg.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="tab-catastral" class="tab">
                        <div class="tab-content">
                            <div class="info">
                                <h4 class="title">Sistema de Gestión Catastral e-GIScat</h4>
                                <a href="<? echo($path) ?>servicios/implementacion-de-sistemas/giscat/" class="btn-type-1">
                                    Ver demo
                                    <span class="arrow">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                    </span>
                                </a>
                                <ul class="text-3 bullet-list">
                                    <li>e-GIScat.</li>
                                    <li>Dirigido al <span class="g-strong">Catastro Estatal o Municipal</span>.</li>
                                    <li><span class="g-strong">Procesos estandarizados</span> e interactuando con las diferentes áreas en la Gestión Catastral.</li>
                                    <li><span class="g-strong">Atención a los usuarios</span> con trámites presenciales y virtuales para grandes usuarios.</li>
                                    <li>Teniendo una sola <span class="g-strong">Base de Información Tabular, Cartográfica y Documental</span>.</li>
                                </ul>
                            </div>
                            <div class="image">
                                <img src="<? echo($path) ?>src/assets/img/sistemas-img/img-2-giscat.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="tab-documental" class="tab">
                        <div class="tab-content">
                            <div class="info">
                                <h4 class="title">Sistema de Gestión Documental e-GISdoc</h4>
                                <ul class="text-3 bullet-list">
                                    <li>Dirigido a las Dependencias que requieran el <span class="g-strong">resguardo de su Acervo Documental</span>.</li>
                                    <il>Dirigido al <span class="g-strong">Catastro Estatal o Municipal</span>.</il>
                                    <li><span class="g-strong">Procesos estandarizados</span> con las mejores prácticas en la gestión documental.</li>
                                    <li><span class="g-strong">Atención inmediata y con seguridad</span> a los usuarios autorizados.</li>
                                    <li><span class="g-strong">100% Web</span>.</li>
                                </ul>
                            </div>
                            <div class="image">
                                <img src="<? echo($path) ?>src/assets/img/sp/placeholder.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content">
            <h3>
                Metodología para
                <br>
                una Implementación Exitosa
            </h3>
            <div class="g-cards-2 double">
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">1</span>
                        </span>
                        <h6 class="title">Evaluación Inicial</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Realizamos un análisis exhaustivo de tus requisitos y diseñamos una solución personalizada.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">2</span>
                        </span>
                        <h6 class="title">Desarrollo Personalizado</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Adaptándolo a tus procesos específicos y necesidades operativas, asegurando que cumpla con tus expectativas.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">3</span>
                        </span>
                        <h6 class="title">Pruebas y Despliegue</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Para garantizar la funcionalidad y seguridad del sistema, seguidas por una implementación meticulosa.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">4</span>
                        </span>
                        <h6 class="title">Capacitación y Soporte</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Para los usuarios brindamos soporte continuo, asegurando que el sistema permanezca actualizado y funcional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
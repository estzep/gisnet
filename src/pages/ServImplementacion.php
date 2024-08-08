<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
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
            $clientsTitle = $service['clientsTitle'];
            $clientsDescription = $service['clientsDescription'];
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
                <img src="<? echo $path ?>src/assets/img/sp/<? echo $headerImg ?>" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center">
                Los sistemas más
                <br>
                versátiles del mercado
            </h3>
            <div id="implementacion-tabs" class="tabs-2">
                <div class="controls">
                    <button id="btn-registral" class="btn-type-1" data-control="registral" onclick="changeTab()">Gestión Registral</button>
                    <button id="btn-catastral" class="btn-type-1" data-control="catastral" onclick="changeTab()">Gestión Catastral</button>
                    <button id="btn-documental" class="btn-type-1" data-control="documental" onclick="changeTab()">Gestión Documental</button>
                </div>
                <div id="tab-registral" class="tab">
                    resgistral
                </div>
                <div id="tab-catastral" class="tab">
                    catastral
                </div>
                <div id="tab-documental" class="tab">
                    documental
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
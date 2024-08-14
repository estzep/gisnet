<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $summaryTitle = "Tranforma tu registro público con procesos modernos";
    $summaryDescription = "e-GISreg es una solución tecnológica capaz de ofrecer un modelo de gestión, eficiente y eficaz, para la atención de los trámites  que sean presentados, de manera remota o en sitio, ante la dependencia. Parametrizable y diseñada bajo los más modernos estándares de desarrollo.";
?>
<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>e-GISreg</h1>
                <p class="text-1">
                    Transformar al Registro Público de la Propiedad en una Institución totalmente DIGITAL, con procesos estandarizados basados en las mejores prácticas, así como plataformas tecnológicas.
                </p>
            </div>
            <div class="image video">
                <video width="400" controls controlsList="nodownload">
                    <source src="<? echo($path) ?>src/assets/video/gisreg.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Summary.php'); ?>
<section class="demo-cards">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center">
                Beneficios de trabajar
                <br>
                con e-GISreg
            </h3>
            <div class="demo-cards-container">
                <div class="demo-card">
                    <h4 class="title">Procesos</h4>
                    <ul class="text-3 bullet-list">
                        <li>Permite Ingreso y Entrega de forma electrónica.</li>
                        <li>Gestión del tramite con el expediente digital (Digitalización de los documentos del trámite previo al Ingreso).</li>
                        <li>Validación directa con el recibo de pago oficial.</li>
                        <li>Firma Electrónica del Calificador y Registrador.</li>
                        <li>Turnador de trámites configurable.</li>
                    </ul>
                </div>
                <div class="demo-card">
                    <h4 class="title">Arquitectura de la app</h4>
                    <ul class="text-3 bullet-list">
                        <li>Lenguaje y Base de datos Libre de pago de Licencias, arquitecturas abiertas.</li>
                        <li>Plataforma WEB / Accesible desde cualquier dispositivo.</li>
                        <li>Dispone la información del FOLIO ELECTRONICO  mediante Servicios Web para la interoperabilidad con otras Instituciones.</li>
                    </ul>
                </div>
                <div class="demo-card">
                    <h4 class="title">Servicios en línea</h4>
                    <ul class="text-3 bullet-list">
                        <li>Posibilidad de emisión en línea de CERTIFICADO DE LIBERTAD DE GRAVAMEN.</li>
                        <li><span class="g-strong light">Notario:</span> Ventanilla Electrónica (ingreso de trámites mediante firma electrónica), Consulta de todos los trámites ingresados de su notaría ( En proceso, Terminados, Suspendidos, Rechazados).</li>
                        <li><span class="g-strong light">Público en general:</span> Estatus de un tramite, ingreso de servicios, consulta de documentos emitidos por el RPP.</li>
                        <li>Alerta Registral para notificación de movimientos a un FOLIO.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

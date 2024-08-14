<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $summaryTitle = "La herramienta clave para transformar tu catastro";
    $summaryDescription = "Con e-GIScat, se logrará la transformación de la Gestión Catastral, fortaleciendo la recaudación de las contribuciones asociadas a la propiedad y se convierta en el motor del desarrollo económico del territorio al proporcionar una valiosa fuente de información para la planeación del desarrollo social y urbano, seguridad pública, protección civil, etc.";
?>
<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>e-GIScat</h1>
                <p class="text-1">
                    Proporcionar una herramienta de Gestión y Actualización Catastral, que permita a los Municipios y Estados contar con información del territorio veraz y oportuna para llevar una adecuada planeación del desarrollo urbano y económico con una recaudación eficiente.
                </p>
            </div>
            <div class="image video">
                <video width="400" controls controlsList="nodownload">
                    <source src="<? echo($path) ?>src/assets/video/giscat.mp4" type="video/mp4">
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
                con e-GIScat
            </h3>
            <div class="demo-cards-container">
                <div class="demo-card">
                    <h4 class="title">Beneficios e-GIScat</h4>
                    <ul class="text-3 bullet-list">
                        <li>Aumento en la recaudación.</li>
                        <li>Administración y valuación eficiente del inventario de predios urbanos y rústicos.</li>
                        <li>Información actualizada del territorio.</li>
                        <li>Acceso remoto a la información desde cualquier plataforma.</li>
                        <li>Eliminación de trámites entre dependencias.</li>
                        <li>Adopción de pago de servicios en línea o a través de centros comerciales.</li>
                        <li>Estandarización y homologación de la operación Catastral en la entidad.</li>
                        <li>Consulta e incorporación de diferentes capas de información.</li>
                    </ul>
                </div>
                <div class="demo-card">
                    <h4 class="title">Arquitectura</h4>
                    <p class="subtitle text-3">Arquitecturas abiertas</p>
                    <ul class="text-3 bullet-list">
                        <li>Desarrollador de Java</li>
                        <li>Base de datos</li>
                        <li>Geoespacial PostgreSQL - PostGis.</li>
                    </ul>
                    <p class="subtitle text-3">Procesos</p>
                    <ul class="text-3 bullet-list">
                        <li>Información en tiempo real, integral, veraz y oportuna.</li>
                        <li>Actualiza la información tabular y cartográfica.</li>
                        <li>Control y Gestión de todos los trámites catastrales.</li>
                        <li>Un Padrón Catastral actualizado, para un uso multifinalitario.</li>
                    </ul>
                </div>
                <div class="demo-card">
                    <h4 class="title">Alcances</h4>
                    <p class="subtitle text-3">Fortalecer los procesos del Catastro</p>
                    <ul class="text-3 bullet-list">
                        <li>Definir una operación homogénea, estandarizada y sistematizada.</li>
                        <li>Trazabilidad de todos los trámites.</li>
                        <li>Firma electrónica y expediente digital.</li>
                        <li>Integración de los datos geográficos, alfanuméricos y documental en una sola fuente de información.</li>
                        <li>Optimizar el uso de las tecnologías de la información y contar con herramientas robustas.</li>
                        <li>Preparado para interoperar con Registro Público, Notarios, Institutos de Vivienda y otras instancias vinculadas a Catastro.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

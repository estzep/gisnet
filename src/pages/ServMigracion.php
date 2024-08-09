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
                    <a href="<? echo $path ?>files/migracion-de-acervos.pdf" class="btn-type-6 s-btn">
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
<section class="migracion-de-acervos">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center">
                La digitalización tiene
                <br>
                dos grandes procesos
            </h3>
            <h3>Digitalización</h3>
            <div class="tabs">
                <div class="column info">
                    <ul class="tablist" role="tablist">
                        <li id="li-tab1" class="tab active" data-bs-toggle="tab" data-bs-target="#tab-tab1" role="tab" aria-controls="tab-tab1" aria-selected="true">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Inventario General</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Creación de un listado detallado de todos los documentos del acervo, identificando y catalogando cada elemento.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab2" class="tab" data-bs-toggle="tab" data-bs-target="#tab-tab2" role="tab" aria-controls="tab-tab2" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Depuración y revisión del acervo documental</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Evaluación y selección de documentos para determinar cuáles deben digitalizarse, eliminando duplicados o material irrelevante.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab3" class="tab" data-bs-toggle="tab" data-bs-target="#tab-tab3" role="tab" aria-controls="tab-tab3" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Digitalización</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Conversión de documentos físicos a formato digital mediante escaneo u otros métodos apropiados.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li id="li-tab4" class="tab" data-bs-toggle="tab" data-bs-target="#tab-tab4" role="tab" aria-controls="tab-tab4" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Control de calidad en todo el proceso</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Verificación continua de la precisión y legibilidad de los documentos digitalizados en cada etapa del proceso.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column image tab-content">
                    <div id="tab-tab1" class="panel tab-pane fade show active" role="tabpanel" aria-labelledby="li-tab1" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab2" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab2" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab3" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab3" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-tab4" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-tab4" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="migracion-de-acervos">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-start text-sm-end">Indexado y captura de metadatos</h3>
            <div class="tabs reversed">
                <div class="column info">
                    <ul class="tablist" role="tablist">
                        <li id="li-r-tab1" class="tab active" data-bs-toggle="tab" data-bs-target="#tab-r-tab1" role="tab" aria-controls="tab-r-tab1" aria-selected="true">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Estructura o Nombre de los Archivos</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3 mb-0">
                                            Se categoriza de la siguiente manera
                                            <br>
                                        </p>
                                        <ul class="text-3 bullet-list">
                                            <li>Año / Juzgado: Clasificamos los documentos según el año y el juzgado correspondiente.</li>
                                            <li>Materia: Agrupamos los documentos por temas o áreas de interés.</li>
                                            <li>Fecha: Ordenamos cronológicamente para un acceso rápido y eficiente.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-r-tab2" class="tab" data-bs-toggle="tab" data-bs-target="#tab-r-tab2" role="tab" aria-controls="tab-r-tab2" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Captura de Datos para Búsquedas Efectivas (Metadatos)</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <p class="text-3">
                                        Registro de información clave sobre cada documento digitalizado para facilitar su posterior localización y recuperación en sistemas de búsqueda.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column image tab-content">
                    <div id="tab-r-tab1" class="panel tab-pane fade show active" role="tabpanel" aria-labelledby="li-r-tab1" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                    <div id="tab-r-tab2" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-r-tab2" tabindex="0">
                        <img src="<?php echo($path); ?>src/assets/img/placeholder.png" alt="Placeholder image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="migracion-de-acervos">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-sm-center text-start">
                Proceso de la captura jurídica
            </h3>
            <div class="g-cards-2 triple">
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">1</span>
                        </span>
                        <h6 class="title">Análisis Jurídico</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Apertura del folio y la creación de la carátula. Establece una base sólida y precisa para los siguientes registros.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">2</span>
                        </span>
                        <h6 class="title">Captura de los Actos Jurídicos</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Respetando el tracto sucesivo vigente. Este proceso asegura la integridad y la cronología exacta de los registros.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">3</span>
                        </span>
                        <h6 class="title">Validación del Supervisor Jurídico</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Asegura la precisión, fiabilidad y la conformidad legal de los documentos capturados para la migración.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">4</span>
                        </span>
                        <h6 class="title">Validación y Cierre de Libro Físico</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Es un proceso esencial que certifica que toda la información ha sido correctamente transferida y archivada.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">5</span>
                        </span>
                        <h6 class="title">Sistema de Gestión Registro</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Proporciona una plataforma organizada y accesible para la gestión continua y la consulta de documentos.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <span class="list-icon">
                            <span class="inner">6</span>
                        </span>
                        <h6 class="title">Aplicación e-GISreg</h6>
                    </div>
                    <div class="bottom">
                        <p class="text-3">
                            Respetando el tracto sucesivo vigente. Este proceso asegura la integridad y la cronología exacta de los registros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
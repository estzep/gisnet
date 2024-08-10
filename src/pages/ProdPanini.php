<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "panini";

    foreach ($data['products'] as $product) {
        if ($product['spname'] === $spname) {
            $headerTitle = $product['headerTitle'];
            $headerDescription = $product['headerDescription'];
            $headerImg = $product['headerImg'];
            $clientsTitle = $product['clientsTitle'];
            $clientsDescription = $product['clientsDescription'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="container section-container">
        <div class="content">
            <h3 class="text-center mb-5">¿Qué ofrece Panini?</h3>
            <div class="g-cards-1">
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-identidad-segura.png" alt="Icon">
                        </div>
                        <h6>Identidad Segura</h6>
                        <p class="text-4">
                            La última innovación de Panini, una obra maestra de la consolidación inteligente, aborda varias funciones clave para la verificación de la identidad y la autenticidad de los clientes de forma fiable e intuitiva.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Descubra BioCred
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-escaner-cheques.png" alt="Icon">
                        </div>
                        <h6>Escáner de Cheques</h6>
                        <p class="text-4">
                            Los sistemas de captura escalables de Panini responden a una variedad de modelos de procesamiento distribuido de cheques, ofreciendo un rendimiento y una fiabilidad superior.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Nuestra gama
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-innovacion-bancos.png" alt="Icon">
                        </div>
                        <h6>Innovación para los bancos</h6>
                        <p class="text-4">
                            Gracias a décadas de experiencia y a un profundo conocimiento de sus necesidades, podemos ofrecer sistemáticamente a nuestros clientes bancarios una mejora decisiva de sus procesos.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Diferencia clave
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content">
            <h3>Productos destacados</h3>
            <div class="tabs">
                <div class="column info">
                    <ul class="tablist" role="tablist">
                        <li id="li-panini1" class="tab active" data-bs-toggle="tab" data-bs-target="#tab-panini1" role="tab" aria-controls="tab-panini1" aria-selected="true">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Biocred</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            Plataforma de identidad universal para la interacción con el cliente en precencia.
                                        </p>
                                        <ul class="text-3 bullet-list">
                                            <li>Autenticación de clientes basada en huellas dáctilares certificada por el FBI con coincidencia fuera de línea.</li>
                                            <li>Sin preocupaciones de privacidad porque el cliente mantiene su propia credencial.</li>
                                            <li>Compatible con métodos de autenticación alternativos.</li>
                                            <li>Escaneo profesional de DNI como parte de la verificación de identidad / KYC.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-panini2" class="tab" data-bs-toggle="tab" data-bs-target="#tab-panini2" role="tab" aria-controls="tab-panini2" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>VisionX</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            El escáner cheques de escritorio más vendido de todos los tiempos. Con tecnología de próxima generación diseñada para la mayor precisión, calidad de imagen superior y manejo impecable de papel con opciones de endoso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-panini3" class="tab" data-bs-toggle="tab" data-bs-target="#tab-panini3" role="tab" aria-controls="tab-panini3" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>EverneXt</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            El escáner inteligente más avanzado de Panini. Optimiza la captura de documentos en caja, ofreciendo una ergonomía superior y una eficiencia sin igual. Este dispositivo mejora notablemente la experiencia tanto para el personal bancario como para los clientes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column image tab-content">
                    <div id="tab-panini1" class="panel tab-pane fade show active" role="tabpanel" aria-labelledby="li-panini1" tabindex="0">
                        <img src="<? echo($path) ?>src/assets/img/panini-img/img-2-biocred.jpg" alt="Biocred">
                    </div>
                    <div id="tab-panini2" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-panini2" tabindex="0">
                        <img src="<? echo($path) ?>src/assets/img/panini-img/img-3-visionx.jpg" alt="VisionX">
                    </div>
                    <div id="tab-panini3" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-panini3" tabindex="0">
                        <img src="<? echo($path) ?>src/assets/img/panini-img/img-4-evernext.jpg" alt="Biocred">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
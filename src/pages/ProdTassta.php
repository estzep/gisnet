<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "tassta";

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

    $cards = '[
        {
            "icon": "icon-20.svg",
            "title": "Llamada Grupal"
        },
        {
            "icon": "icon-21.svg",
            "title": "Llamada Individual"
        },
        {
            "icon": "icon-22.svg",
            "title": "Llamada Prioritaria"
        },
        {
            "icon": "icon-23.svg",
            "title": "Llamada de Emergencia"
        },
        {
            "icon": "icon-24.svg",
            "title": "Control Remoto"
        },
        {
            "icon": "icon-25.svg",
            "title": "Localización GPS"
        },
        {
            "icon": "icon-26.svg",
            "title": "GPS Rutas"
        },
        {
            "icon": "icon-27.svg",
            "title": "Localización de interiores"
        },
        {
            "icon": "icon-28.svg",
            "title": "Mensajes de Texto y Datos"
        },
        {
            "icon": "icon-29.svg",
            "title": "Estatus de los Mensajes"
        },
        {
            "icon": "icon-30.svg",
            "title": "Protección de Hombre Caído"
        },
        {
            "icon": "icon-31.svg",
            "title": "Grabación de Llamadas"
        },
        {
            "icon": "icon-32.svg",
            "title": "Histórico de Llamadas"
        },
        {
            "icon": "icon-33.svg",
            "title": "GPS Histórico"
        },
        {
            "icon": "icon-34.svg",
            "title": "Gestión de Tareas"
        }
    ]';
    $cards_array = json_decode($cards, true);
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1">
            <div class="info">
                <h3>Obtén información rápida y relevante sobre el inventario de tus dispositivos</h3>
                <p class="text-3">
                    Ofrece una solución moderna Push-to-Talk que utiliza todas las capacidades técnicas de uso de smartphones, a través de la RED LTE (SIM de TELCEL, MOVISTAR, ATT, ALTAN-9.
                    <br>
                    Mediante el hardware estándar, cada organización puede prepararse tener un Sistema completo e integral de Comunicación.
                </p>
            </div>
            <div class="image f contain">
                <img src="<? echo $path ?>src/assets/img/tassta-img/img-2.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container section-container">
        <div class="content py-0">
            <h3 class="text-center mb-5">Componentes Principales</h3>
            <div class="g-cards-1">
                <div class="g-card tassta">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/tassta-img/rodon.jpg" alt="Icon">
                        </div>
                        <h6>T.Rodon</h6>
                        <p class="text-4">
                            Solución profesional de comando y control
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Ver PDF
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card tassta">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/tassta-img/flex.jpg" alt="Icon">
                        </div>
                        <h6>T.Flex</h6>
                        <p class="text-4">
                            Solución profesional push-to-talk (PTT) de banda ancha
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Ver PDF
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card tassta">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/tassta-img/lion.jpg" alt="Icon">
                        </div>
                        <h6>T.Lion</h6>
                        <p class="text-4">
                            Servidor de nube y standalone
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Ver PDF
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
    <div class="container section-container">
        <div class="content">
            <h3>Características</h3>
            <div class="g-cards-3">
                <?php foreach ($cards_array as $card): ?>
                    <div class="g-card">
                        <div class="icon">
                            <img src="<?php echo($path); ?>src/assets/icons/<?php echo $card['icon']; ?>" alt="Icon">
                        </div>
                        <div class="title">
                            <h6><?php echo $card['title']; ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="badges">
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center mb-5">Seguridad, certificados y cumplimientos</h3>
            <div class="badges-container">
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/tassta-img/3gpp.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/tassta-img/etsi.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/tassta-img/firstnet.png" alt="Badge">
                </div>
                <div class="badge">
                    <img src="<? echo($path) ?>src/assets/img/tassta-img/gs.png" alt="Badge">
                </div>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
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
            $clientsTitle = $service['clientsTitle'];
            $clientsDescription = $service['clientsDescription'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="section-container container">
        <div class="content">
            Contenido...
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1">
            <div class="heading">
                <h3 class="title-1">
                    Acciones sobre la
                    <br>
                    atención de cliente
                </h3>
                <p class="text-1">
                    La plataforma cuenta con diferentes tipos de permisologías a través de grupos de usuarios y diferentes roles, y las acciones que pueden realizarse cuando se está atendiendo al usuario.
                </p>
            </div>
            <div class="graph-1"></div>
            <div class="columns">

            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
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
<? include($path.'src/components/WhyGisnet.php'); ?>
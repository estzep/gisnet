<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $data = json_decode($jsonString);$jsonString = file_get_contents($path.'src/assets/data/services.json');
    $data = json_decode($jsonString, true);

    $servicename = "migracion-de-acervos";

    foreach ($data['services'] as $service) {
        if ($service['servicename'] === $servicename) {
            $headerTitle = $service['headerTitle'];
            $headerDescription = $service['headerDescription'];
            $headerImg = $service['headerImg'];
            $clientsTitle = $service['clientsTitle'];
            $clientsDescription = $service['clientsDescription'];
            $clients = $service['clients'];

            // echo "Header Title: $headerTitle<br>";
            // echo "Header Description: $headerDescription<br>";
            // echo "Header Image: $headerImg<br>";
            // echo "Clients Title: $clientsTitle<br>";
            // echo "Clients Description: $clientsDescription<br>";
            // echo "Clients: " . implode(', ', $clients) . "<br>";

            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="container">
        <div class="content">
            migracion de acervos
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "acf-technologies";

    foreach ($data['products'] as $product) {
        if ($product['spname'] === $spname) {
            $headerTitle = $product['headerTitle'];
            $headerDescription = $product['headerDescription'];
            $headerImg = $product['headerImg'];
            $clientsTitle = $product['clientsTitle'];
            $clientsDescription = $product['clientsDescription'];
            $clients = $product['clients'];
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
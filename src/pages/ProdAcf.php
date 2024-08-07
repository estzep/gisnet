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
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section class="acf">
    <div class="section-container container">
        <div class="content">
            <div class="info">
                <h3>
                    Acciones sobre la
                    <br>
                    atención de cliente
                </h3>
                <p class="text-2">
                    La plataforma cuenta con diferentes tipos de permisologías a través de grupos de usuarios y diferentes roles, y las acciones que pueden realizarse cuando se está atendiendo al usuario.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content">
            Contenido...
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
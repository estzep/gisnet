<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $data = json_decode($jsonString);$jsonString = file_get_contents($path.'src/assets/data/services.json');
    $data = json_decode($jsonString, true);
    
    if ($data === null) {
        echo 'Error decoding JSON: ' . json_last_error_msg();
    } else {
        echo $data->key;
    }

    $headerTitle = "Migración de acervos";
    $headerDescription = "El proceso de transferir datos, documentos, imágenes y registros de un formato o sistema de almacenamiento a otro, más moderno y accesible.";
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
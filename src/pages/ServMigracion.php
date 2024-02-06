<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);

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
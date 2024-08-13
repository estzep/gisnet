<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $clientsTitle = "La herramienta clave para transformar tu catastro";
    $clientsDescription = "Con e-GIScat, se logrará la transformación de la Gestión Catastral, fortaleciendo la recaudación de las contribuciones asociadas a la propiedad y se convierta en el motor del desarrollo económico del territorio al proporcionar una valiosa fuente de información para la planeación del desarrollo social y urbano, seguridad pública, protección civil, etc.";
?>
<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>Giscat</h1>
                <p class="text-1">
                    Description
                </p>
            </div>
            <div class="image">
                <img src="<? echo $path ?>src/assets/img/sp/placeholder.png" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="section-container container">
        <div class="content">
            Contenido...
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1><? echo $headerTitle ?></h1>
                <p class="text-1">
                    <? echo $headerDescription ?>
                </p>
                <a href="<? echo $path ?>/contacto" class="btn-type-1 f-btn">
                    Quiero comenzar
                </a>
            </div>
            <div class="image">
                <img src="<? echo $path ?><? echo $headerImg ?>" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</header>
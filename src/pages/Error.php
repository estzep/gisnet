<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<header id="inicio">
    <div class="container">
        <div class="content">
            <h1>404</h1>
            <p class="text-1">
                Lo sentimos, la página no fue encontrada.
            </p>
            <div class="links">
                <a href="<? echo($path) ?>" class="btn-type-1 f-btn">
                    Regresar a inicio
                </a>
            </div>
        </div>
    </div>
</header>
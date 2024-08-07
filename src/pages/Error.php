<?php
    // $errorCode = http_response_code();

    // $errorMessages = [
    //     404 => [
    //         'title' => '404',
    //         'message' => 'Lo sentimos, la página no fue encontrada.'
    //     ],
    //     403 => [
    //         'title' => '403',
    //         'message' => 'Accesso no autorizado.'
    //     ],
    // ];
    // if (array_key_exists($errorCode, $errorMessages)) {
    //     $error = $errorMessages[$errorCode];
    // } else {
    //     $error = [
    //         'title' => 'Error',
    //         'message' => 'Ocurrió un error inesperado.'
    //     ];
    // }

    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<header id="inicio" class="error">
    <div class="container">
        <div class="content">
            <div class="info">
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
    </div>
</header>
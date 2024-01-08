<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<footer>
    <div class="container">
        <div class="content">
            <div class="sitemap">
                <div class="column">
                    <h5><a href="">Empresa</a></h5>
                    <ul>
                        <li>
                            <p><a href="">Sobre Gisnet</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Servicios</a></h5>
                    <ul>
                        <li>
                            <p><a href="">Migración de acervos</a></p>
                        </li>
                        <li>
                            <p><a href="">Implementación de sistemas</a></p>
                        </li>
                        <li>
                            <p><a href="">Limpieza de datos</a></p>
                        </li>
                        <li>
                            <p><a href="">Desarrollo, Soporte y Mantenimiento</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Productos</a></h5>
                    <ul>
                        <li>
                            <p><a href="">PANINI</a></p>
                        </li>
                        <li>
                            <p><a href="">ACF Technologies</a></p>
                        </li>
                        <li>
                            <p><a href="">COUCHBASE</a></p>
                        </li>
                        <li>
                            <p><a href="">Security ScoreCard</a></p>
                        </li>
                        <li>
                            <p><a href="">Corsight</a></p>
                        </li>
                        <li>
                            <p><a href="">Scale Fusion</a></p>
                        </li>
                        <li>
                            <p><a href="">TASSTA</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Ayuda</a></h5>
                    <ul>
                        <li>
                            <p><a href="">Contactar</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="about">
                <a href="" class="logo">
                    <img src="" alt="">
                </a>
                <p>
                    Gisnet es una empresa especializada en la integración de soluciones y brindando consultarías especializadas.
                </p>
            </div>
            <hr>
            <div class="copyright">
                <p>
                    @ Gisnet 2023. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>
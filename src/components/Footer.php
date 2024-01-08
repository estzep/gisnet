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
                    <h5><a href="#empresa">Empresa</a></h5>
                    <ul>
                        <li>
                            <p><a href="<? echo($path) ?>/nosotros">Sobre Gisnet</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Servicios</a></h5>
                    <ul>
                        <li>
                            <p><a href="<? echo($path) ?>/servicios/migracion-de-acervos">Migración de acervos</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/servicios/implementacion-de-sistemas">Implementación de sistemas</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/servicios/limpieza-de-datos">Limpieza de datos</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/servicios/desarrollo-limpieza-mantenimiento">Desarrollo, Soporte y Mantenimiento</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Productos</a></h5>
                    <ul>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/panini">PANINI</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/acf-technologies">ACF Technologies</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/couchbase">COUCHBASE</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/security-scorecard">Security ScoreCard</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/corsight">Corsight</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/scale-fusion">Scale Fusion</a></p>
                        </li>
                        <li>
                            <p><a href="<? echo($path) ?>/productos/tassta">TASSTA</a></p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5><a href="">Ayuda</a></h5>
                    <ul>
                        <li>
                            <p><a href="<? echo($path) ?>/contacto">Contactar</a></p>
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
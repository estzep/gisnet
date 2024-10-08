<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<footer>
    <section id="contacto" class="top">
        <div class="container">
            <div class="content">
                <h2>¿Listo para empezar?</h2>
                <p>Habla con nuestros expertos y te contestaremos a la brevedad</p>
                <a href="<? echo($path) ?>contacto" class="btn-type-3">
                    Contactar a ventas
                </a>
            </div>
        </div>
    </section>
    <section class="bottom">
        <div class="container">
            <div class="content">
                <div class="sitemap">
                    <div class="column">
                        <h5><a href="<? echo($path) ?>#empresa">Empresa</a></h5>
                        <ul>
                            <li>
                                <p><a href="<? echo($path) ?>nosotros">Sobre Gisnet</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <h5><a href="<? echo($path) ?>#servicios">Servicios</a></h5>
                        <ul>
                            <li>
                                <p><a href="<? echo($path) ?>servicios/migracion-de-acervos">Migración de acervos</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>servicios/implementacion-de-sistemas">Implementación de sistemas</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>servicios/limpieza-de-datos">Limpieza de datos</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <h5><a href="<? echo($path) ?>#productos">Productos</a></h5>
                        <ul>
                            <li>
                                <p><a href="<? echo($path) ?>productos/panini">PANINI</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>productos/acf-technologies">ACF Technologies</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>productos/couchbase">COUCHBASE</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>productos/security-scorecard">Security ScoreCard</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>productos/corsight">Corsight</a></p>
                            </li>
                            <li>
                                <p><a href="<? echo($path) ?>productos/tassta">TASSTA</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <h5><a href="#contacto">Ayuda</a></h5>
                        <ul>
                            <li>
                                <p><a href="<? echo($path) ?>contacto">Contactar</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="about">
                    <a href="<? echo($path) ?>#inicio" class="logo">
                        <img src="<? echo($path) ?>src/assets/gisnet/gisnet-white.png" alt="Gisnet logo">
                    </a>
                    <p>
                        Gisnet es una empresa especializada en la integración de soluciones y brindando consultarías especializadas.
                    </p>
                    <div class="socials">
                        <a href="https://www.linkedin.com/company/servicios-profesionales-gisnet/" target="_blank">
                            <img src="<? echo($path) ?>src/assets/icons/linkedin-icon.svg" alt="LinkedIn">
                        </a>
                        <!-- <a href="https://www.facebook.com/" target="_blank">
                            <img src="<? echo($path) ?>src/assets/icons/facebook-icon.svg" alt="Facebook">
                        </a> -->
                        <a href="https://x.com/gi_snet" target="_blank">
                            <img src="<? echo($path) ?>src/assets/icons/twitter-icon.svg" alt="Twitter">
                        </a>
                    </div>
                </div>
                <div class="copyright">
                    <p>
                        @ Gisnet 2023. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

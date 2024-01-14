<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<nav>
    <div class="nav-container container">
        <div class="content">
            <div class="logo">
                <a href="<? echo($path) ?>#inicio" onclick="closeNav()"><img src="<? echo($path) ?>src/assets/img/logos/logo-gisnet.png" alt="GISnet"></a>
            </div>
            <div class="toggle-btn">
                <button onclick="toggleNav()">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </button>
            </div>
            <div class="links">
                <div class="links-container container">
                    <ul id="accordionLinks" class="links-content accordion">
                        <li class="links-item">
                            <a href="<? echo($path) ?>#empresa" onclick="closeNav()">Empresa</a>
                        </li>
                        <li class="links-item">
                            <a class="accordion-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#collapseServicios" aria-expanded="false" aria-controls="collapseServicios">
                                Servicios <img src="<? echo($path) ?>src/assets/icons/icon-chevron.svg" alt="Chevron icon" class="icon">
                            </a>
                        </li>
                        <div id="collapseServicios" class="accordion-collapse collapse" data-bs-parent="#accordionLinks">
                            <ul class="dropdown">
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/migracion-de-acervos">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-10.svg" alt="Icon 10">
                                        </div>
                                        <div class="info">
                                            <h6>Migración de Acervos</h6>
                                            <p>Documentales a medios electrónicos</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/implementacion-de-sistemas">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-12.svg" alt="Icon 12">
                                        </div>
                                        <div class="info">
                                            <h6>Implementación de Sistemas</h6>
                                            <p>Registrales, Catastrales y de Gestión Documental</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/limpieza-de-datos">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-5-sm.svg" alt="Icon 5">
                                        </div>
                                        <div class="info">
                                            <h6>Limpieza de Datos</h6>
                                            <p>De la Base de Datos Registrales</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/desarrollo-soporte-mantenimiento">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-14.svg" alt="Icon 14">
                                        </div>
                                        <div class="info">
                                            <h6>Desarrollo, Soporte y Mantenimiento</h6>
                                            <p>A los Sistemas Instalados</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <li class="links-item">
                            <a class="accordion-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#collapseProductos" aria-expanded="false" aria-controls="collapseProductos">
                                Productos <img src="<? echo($path) ?>src/assets/icons/icon-chevron.svg" alt="Chevron icon" class="icon">
                            </a>
                        </li>
                        <div id="collapseProductos" class="accordion-collapse collapse" data-bs-parent="#accordionLinks">
                            <ul class="dropdown">
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/migracion-de-acervos">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-10.svg" alt="Icon 10">
                                        </div>
                                        <div class="info">
                                            <h6>Migración de Acervos</h6>
                                            <p>Documentales a medios electrónicos</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/implementacion-de-sistemas">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-12.svg" alt="Icon 12">
                                        </div>
                                        <div class="info">
                                            <h6>Implementación de Sistemas</h6>
                                            <p>Registrales, Catastrales y de Gestión Documental</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/limpieza-de-datos">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-5-sm.svg" alt="Icon 5">
                                        </div>
                                        <div class="info">
                                            <h6>Limpieza de Datos</h6>
                                            <p>De la Base de Datos Registrales</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/desarrollo-soporte-mantenimiento">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-14.svg" alt="Icon 14">
                                        </div>
                                        <div class="info">
                                            <h6>Desarrollo, Soporte y Mantenimiento</h6>
                                            <p>A los Sistemas Instalados</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                    <div class="contact-btn">
                        <a href="<? echo($path) ?>contacto" onclick="closeNav()" class="btn-type-1">
                            Contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
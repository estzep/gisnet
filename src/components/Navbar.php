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
                            <a class="accordion-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNavbarServicios" aria-expanded="false" aria-controls="collapseNavbarServicios">
                                Servicios <img src="<? echo($path) ?>src/assets/icons/icon-chevron.svg" alt="Chevron icon" class="icon">
                            </a>
                        </li>
                        <div id="collapseNavbarServicios" class="accordion-collapse servicios collapse navbar-collapse" data-bs-parent="#accordionLinks">
                            <ul class="dropdown">
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>servicios/migracion-de-acervos">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-10.svg" alt="Icon 10">
                                        </div>
                                        <div class="info">
                                            <h6>Migración de Acervos</h6>
                                            <p>Documentales a medios electrónicos.</p>
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
                                            <p>Registrales, Catastrales y de Gestión Documental.</p>
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
                                            <p>De la Base de Datos Registrales.</p>
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
                                            <p>A los Sistemas Instalados.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <li class="links-item">
                            <a class="accordion-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNavbarProductos" aria-expanded="false" aria-controls="collapseNavbarProductos">
                                Productos <img src="<? echo($path) ?>src/assets/icons/icon-chevron.svg" alt="Chevron icon" class="icon">
                            </a>
                        </li>
                        <div id="collapseNavbarProductos" class="accordion-collapse productos collapse navbar-collapse" data-bs-parent="#accordionLinks">
                            <ul class="dropdown">
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/panini">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-7.svg" alt="Icon 7">
                                        </div>
                                        <div class="info">
                                            <h6>Panini</h6>
                                            <p>Escáner para cheques y para la identificación.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/acf-technologies">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-9.svg" alt="Icon 9">
                                        </div>
                                        <div class="info">
                                            <h6>ACF Technologies</h6>
                                            <p>Sistema de Gestión de Filas, Citas y Señalización Digital.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/couchbase">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-8.svg" alt="Icon 8">
                                        </div>
                                        <div class="info">
                                            <h6>Couchbase</h6>
                                            <p>Base de Datos NoSQL para manejo de grandes volúmenes.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/security-scorecard">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-11.svg" alt="Icon 11">
                                        </div>
                                        <div class="info">
                                            <h6>Security ScoreCard</h6>
                                            <p>Plataforma de calificación de riesgos cibernéticos para todos los sectores.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/corsight">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-13.svg" alt="Icon 13">
                                        </div>
                                        <div class="info">
                                            <h6>Corsight</h6>
                                            <p>Protección de la Intimidad, "Privacidad por Diseño y por Defecto".</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/scale-fusion">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-15.svg" alt="Icon 15">
                                        </div>
                                        <div class="info">
                                            <h6>Scale Fusion</h6>
                                            <p>Administración segura, intuitiva, y escalable para dispositivos móviles y terminales.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="<? echo($path) ?>productos/tassta">
                                        <div class="icon">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-16.svg" alt="Icon 16">
                                        </div>
                                        <div class="info">
                                            <h6>TASSTA</h6>
                                            <p>Sistema de Comunicación Innovadora (Comunicación encriptada, Localización, Organización y Seguridad).</p>
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
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
                    
                    <ul id="accordionLinks" class="accordion">
                        <li>
                            <a href="<? echo($path) ?>#empresa" onclick="closeNav()">Empresa</a>
                        </li>
                        <li class="accordion-item">
                            <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseServicios" aria-expanded="false" aria-controls="collapseServicios">Servicios</a>
                            <div id="collapseServicios" class="accordion-collapse collapse show" data-bs-parent="#accordionLinks">
                                hola, soy un accordion de servicios.
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseProductos" aria-expanded="false" aria-controls="collapseProductos">Productos</a>
                            <div id="collapseProductos" class="accordion-collapse collapse" data-bs-parent="#accordionLinks">
                                hola, soy un accordion de productos.
                            </div>
                        </li>
                    </ul>
                    <div class="contact-btn">
                        <a href="contact" class="btn-type-1">
                            Contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- <div class="dropdown">
    <div class="dropdown-container container">
        <div class="content">
            <ul>
                <li>
                    <a href="">Migración de Acervos</a>
                </li>
            </ul>
        </div>
    </div>
</div> -->
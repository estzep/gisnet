<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<nav>
    <div class="nav-container container">
        <div class="content">
            <div class="logo">
                <a href="<? echo($path) ?>"><img src="<? echo($path) ?>src/assets/img/logos/logo-gisnet.png" alt="GISnet"></a>
            </div>
            <div class="toggle-btn">
                <button id="" class="" onclick="toggleNav()">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </button>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="">Empresa</a>
                    </li>
                    <li>
                        <a href="">Servicios</a>
                        <!-- aqui dropdown -->
                    </li>
                    <li>
                        <a href="">Productos</a>
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
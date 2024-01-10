<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<nav>
    <div class="nav-container container">
        <div class="content">
            <div class="links">
                <div class="logo">
                    <a href="">
                        <img src="" alt="GISnet logo">
                    </a>
                </div>
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
            </div>
            <div class="contact">
                <a href="contact" class="btn-type-1 contact-btn">
                    Contacto
                </a>
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
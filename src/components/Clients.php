<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<section id="clientes" class="sp">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3><? echo $clientsTitle ?></h3>
                <p class="text-1">
                    <? echo $clientsDescription ?>
                </p>
            </div>
            <h5>Algunos de nuestros clientes</h5>
            <div class="slider">
                <div class="overlay"></div>
                <div class="track">
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-bbva.png" alt="BBVA logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-cecoban.png" alt="Cecoban logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-diebold-nixdorf.png" alt="Diebold Nixdorf logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-gbo-gto.png" alt="Gobierno de Guanajuato logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-gbo-nl.png" alt="Goierno de Nuevo León logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-santander.png" alt="Santander logo">
                    </div>
                    <!-- repeat -->
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-bbva.png" alt="BBVA logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-cecoban.png" alt="Cecoban logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-diebold-nixdorf.png" alt="Diebold Nixdorf logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-gbo-gto.png" alt="Gobierno de Guanajuato logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-gbo-nl.png" alt="Goierno de Nuevo León logo">
                    </div>
                    <div class="item">
                        <img src="<? echo($path) ?>src/assets/img/logos/logo-santander.png" alt="Santander logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
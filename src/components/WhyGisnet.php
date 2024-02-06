<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<section>
    <div class="container">
        <div class="content">
            <h3>¿Por qué Gisnet?</h3>
            <p>
                En Gisnet nuestra prioridad es que nuestros clientes tengan una experiencia satisfactoria al trabajar con ellos
            </p>
            <div class="g-cards-1">
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-1.svg" alt="Icon">
                    </div>
                    <h6>Confianza</h6>
                    <p>
                        La base de un proyecto satisfactorio es la confianza. Nos comprometemos a mantener una comunicación abierta y transparente en cada etapa de nuestros proyectos.
                    </p>
                </div>
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-1.svg" alt="Icon">
                    </div>
                    <h6>Confianza</h6>
                    <p>
                        La base de un proyecto satisfactorio es la confianza. Nos comprometemos a mantener una comunicación abierta y transparente en cada etapa de nuestros proyectos.
                    </p>
                </div>
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-1.svg" alt="Icon">
                    </div>
                    <h6>Confianza</h6>
                    <p>
                        La base de un proyecto satisfactorio es la confianza. Nos comprometemos a mantener una comunicación abierta y transparente en cada etapa de nuestros proyectos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section id="why">
    <div class="container section-container">
        <div class="content">
            <h3>¿Por qué Gisnet?</h3>
            <p class="text-2">
                En Gisnet nuestra prioridad es que nuestros clientes tengan una experiencia satisfactoria al trabajar con ellos
            </p>
            <div class="g-cards-1">
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-19.svg" alt="Icon">
                    </div>
                    <h6>Confianza</h6>
                    <p class="text-4">
                        La base de un proyecto satisfactorio es la confianza. Nos comprometemos a mantener una comunicación abierta y transparente en cada etapa de nuestros proyectos.
                    </p>
                </div>
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-18.svg" alt="Icon">
                    </div>
                    <h6>Innovación</h6>
                    <p class="text-4">
                        Nuestro enfoque proactivo en la adopción y desarrollo de soluciones vanguardistas nos posiciona como líderes en la transformación digital y tendencias del sector.
                    </p>
                </div>
                <div class="g-card">
                    <div class="icon">
                        <img src="<? echo $path ?>src/assets/icons/icon-17.svg" alt="Icon">
                    </div>
                    <h6>Compromiso</h6>
                    <p class="text-4">
                        Vamos más allá de lo convencional para superar las expectativas de nuestros clientes y  que cada aspecto de nuestro proyecto cumpla con la máxima perfección.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
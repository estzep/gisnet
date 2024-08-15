<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<header class="aboutUs">
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>Sobre Gisnet</h1>
                <p class="text-1">
                    Apasionados por la modernización de nuestros clientes a través de servicios de calidad
                </p>
            </div>
            <div class="image">
                <img src="<? echo $path ?>src/assets/img/sobre-nosotros-img/img-1.jpg" alt="Sobre Gisnet">
            </div>
        </div>
    </div>
</header>
<section id="summary">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3>¿Qué nos hace diferentes?</h3>
                <p class="text-1">
                    Nos distinguimos por nuestra innovación y soluciones a medida, priorizando las necesidades únicas de cada cliente. Uniendo experiencia con creatividad, no solo enfrentamos desafíos actuales sino que preparamos a las organizaciones para el futuro, forjando relaciones sólidas basadas en la confianza y la excelencia.
                </p>
            </div>
        </div>
    </div>
</section>
<? include('src/components/Clients.php'); ?>
<section id="why" class="aboutUs">
    <div class="container section-container">
        <div class="content">
            <h3>Nuestros valores</h3>
            <p class="text-2">
                En Gisnet nuestra prioridad es que nuestros clientes tengan una experiencia satisfactoria al trabajar con ellos
            </p>
            <div class="g-cards-1">
                <div class="g-card">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/icons/icon-19.svg" alt="Icon">
                        </div>
                        <h6>Confianza</h6>
                        <p class="text-4">
                            La base de un proyecto satisfactorio es la confianza. Nos comprometemos a mantener una comunicación abierta y transparente en cada etapa de nuestros proyectos.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/icons/icon-18.svg" alt="Icon">
                        </div>
                        <h6>Innovación</h6>
                        <p class="text-4">
                            Nuestro enfoque proactivo en la adopción y desarrollo de soluciones vanguardistas nos posiciona como líderes en la transformación digital y tendencias del sector.
                        </p>
                    </div>
                </div>
                <div class="g-card">
                    <div class="top">
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
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>Nuestra metodología</h3>
                <p class="text-3 pb-5">
                    Colaboramos estrechamente con nuestros clientes, adoptando un enfoque ágil para garantizar proyectos eficientes y alineados con sus objetivos a largo plazo. Nuestra metodología, centrada en la transparencia y adaptabilidad, permite exceder las expectativas y forjar relaciones duraderas.
                </p>
            </div>
            <div class="image f">
                <img src="<? echo $path ?>src/assets/img/sobre-nosotros-img/img-2.jpg" alt="Sobre Gisnet">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="image s">
                <img src="<? echo $path ?>src/assets/img/sobre-nosotros-img/img-3.jpg" alt="Sobre Gisnet">
            </div>
            <div class="info">
                <h3>Compromiso Firme</h3>
                <p class="text-3 pb-5">
                    Nuestro compromiso radica en la excelencia, la innovación y la responsabilidad social. Nos esforzamos por superar expectativas, entregando soluciones de impacto y construyendo relaciones de confianza duraderas.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content">
            <h3 class="text-center">Equipo</h3>
            <div class="team">
                <div class="member">
                    <h6 class="name">Efraían Hernández Romo</h6>
                    <p class="text-4">
                        Director General
                        <br>
                        <a href="malito:ehernandez@e-gisnet.com">ehernandez@e-gisnet.com</a>
                    </p>
                </div>
                <div class="member">
                    <h6 class="name">Edgar E. Cortez Salvador</h6>
                    <p class="text-4">
                        Director Adjunto
                        <br>
                        <a href="malito:ecortez@e-gisnet.com">ecortez@e-gisnet.com</a>
                    </p>
                </div>
                <div class="member">
                    <h6 class="name">Raúl Dávalos Alonso</h6>
                    <p class="text-4">
                        Director Asociado
                        <br>
                        <a href="malito:rdavalos@e-gisnet.com">rdavalos@e-gisnet.com</a>
                    </p>
                </div>
                <div class="member">
                    <h6 class="name">Martín P. García García</h6>
                    <p class="text-4">
                        Director Comercial
                        <br>
                        <a href="malito:mgarcia@e-gisnet.com">mgarcia@e-gisnet.com</a>
                    </p>
                </div>
                <div class="member">
                    <h6 class="name">Pedro R. López Duarte</h6>
                    <p class="text-4">
                        Gerente de Administración
                        <br>
                        <a href="malito:plopez@e-gisnet.com">plopez@e-gisnet.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<? include('src/components/Partners.php'); ?>

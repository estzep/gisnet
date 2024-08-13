<header id="inicio">
    <div class="container">
        <div class="content">
            <div class="info">
                <h1>Líderes en soluciones y consultorías especializadas</h1>
                <div class="links">
                    <a href="contacto" class="btn-type-1 f-btn desktop">
                        Hablas con nosotros
                    </a>
                    <a href="contacto" class="btn-type-1 f-btn mobile">
                        Contactanos
                    </a>
                    <a href="#empresa" class="btn-type-2 s-btn">
                        Conoce más
                        <span class="arrow">
                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<? include($path.'src/components/Clients.php'); ?>
<section id="empresa">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3>Modernizando procesos de nuestros clientes</h3>
                <p class="text-1">
                    Nos concentramos en la evolución tecnológica de nuestros clientes, mediante los servicios y productos que ofrecemos, dirigidos principalmente al sector Gobierno: Municipal, Estatal, Federal, sector Financiero.
                </p>
            </div>
            <div class="squares-1">
                <div class="square f-square">
                    <div class="square-content">
                        <h4>
                            <img src="src/assets/icons/icon-1.svg" alt="Icon 1" class="icon">
                            Sector Gobierno
                        </h4>
                        <p class="text-2">
                            Hemos participado activamente y con éxito en la Modernización integral de diversas áreas, incluyendo Registros Públicos de la Propiedad, Catastros Estatales y Municipales, Registros Civiles, Salud, Vivienda (Infonavit) y Transportes (SCT).
                        </p>
                    </div>
                </div>
                <div class="square s-square">
                    <div class="square-content">
                        <h4>
                            <img src="src/assets/icons/icon-2.svg" alt="Icon 2" class="icon">
                            Sector Financiero
                        </h4>
                        <p class="text-2">
                            Damos instalación y mantenimiento a nivel nacional a los toma turnos de Banco BBVA y Santander, contando con un Call Center (Centro de llamado), ofreciendo soporte en la operación de los equipos instalados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="nosotros">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <div class="column image">
                    <img src="src/assets/img/landing-img/img-1-disenamos.jpg" alt="Nosotros">
                </div>
                <div class="column info">
                    <h3>Diseñamos soluciones a tu medida</h3>
                    <p class="text-1">
                        En Gisnet, nos adaptamos a tus necesidades específicas ofreciendo soluciones a medida que destacan por su excelencia. Ya sea, que busques servicios especializados, productos personalizados o asesoramiento experto.
                    </p>
                    <a href="nosotros" class="btn-type-2 btn">
                        Conoce más
                        <span class="arrow">
                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                        </span>
                    </a>
                </div>
            </div>
            <div class="squares-2">
                <div class="square">
                    <div class="square-content">
                        <h4>23</h4>
                        <h5>años</h5>
                        <p class="text-3">
                            con presencia Nacional
                        </p>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <h4>116</h4>
                        <h5>millones</h5>
                        <p class="text-3">
                            de imágenes digitalizadas
                        </p>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <h4>114</h4>
                        <h5>millones</h5>
                        <p class="text-3">
                            de Actos Jurídicos Integrados en Folios Electrónicos
                        </p>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <h4>2000+</h4>
                        <h5>sucursales</h5>
                        <p class="text-3">
                            a nivel Nacional dando soporte
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="servicios">
    <div class="section-container container">
        <div class="content">
            <h3>Servicios digitales para tu empresa</h3>
            <div class="tabs">
                <div class="column info">
                    <ul class="tablist" role="tablist">
                        <li id="li-servicio1" class="tab active" data-bs-toggle="tab" data-bs-target="#tab-servicio1" role="tab" aria-controls="tab-servicio1" aria-selected="true">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Migración de acervos</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/migracion-de-acervos/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            Transformación de documentales a formatos digitales electrónicos, asegurando la preservación y accesibilidad de información valiosa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-servicio2" class="tab" data-bs-toggle="tab" data-bs-target="#tab-servicio2" role="tab" aria-controls="tab-servicio2" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Implementación de Sistemas</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/implementacion-de-sistemas/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            Desarrollo de sistemas Registrales, Catastrales y de Gestión Documental, optimizando procesos y mejorando la eficiencia operativa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-servicio3" class="tab" data-bs-toggle="tab" data-bs-target="#tab-servicio3" role="tab" aria-controls="tab-servicio3" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Limpieza de Datos</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a href="servicios/limpieza-de-datos/" class="link btn-type-5">
                                        Leer más
                                        <span class="arrow">
                                            <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                        </span>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            Depuración y saneamiento de bases de datos, eliminando inexactitudes para garantizar la precisión y fiabilidad de la información.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="li-servicio4" class="tab" data-bs-toggle="tab" data-bs-target="#tab-servicio4" role="tab" aria-controls="tab-servicio4" aria-selected="false">
                            <div class="tab-content">
                                <div class="heading">
                                    <h6>Desarrollo, Soporte y Mantenimiento</h6>
                                    <a class="more btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-more.svg" alt="Más" class="head">
                                    </a>
                                    <a class="link btn-type-5">
                                        <img src="<? echo($path) ?>src/assets/icons/icon-arrow-tail.svg" alt="Menos" class="head">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="inner-body">
                                        <p class="text-3">
                                            Servicios continuos para los sistemas instalados, asegurando su óptimo funcionamiento y actualización constante.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column image tab-content">
                    <div id="tab-servicio1" class="panel tab-pane fade show active" role="tabpanel" aria-labelledby="li-servicio1" tabindex="0">
                        <img src="src/assets/img/landing-img/img-2-migracion.jpg" alt="Migración de Acervos Imagen">
                    </div>
                    <div id="tab-servicio2" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-servicio2" tabindex="0">
                        <img src="src/assets/img/landing-img/img-3-sistemas.jpg" alt="Implementación de Sistemas Imagen">
                    </div>
                    <div id="tab-servicio3" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-servicio3" tabindex="0">
                        <img src="src/assets/img/landing-img/img-4-limpieza.jpg" alt="Limpieza de datos Imagen">
                    </div>
                    <div id="tab-servicio4" class="panel tab-pane fade" role="tabpanel" aria-labelledby="li-servicio4" tabindex="0">
                        <img src="src/assets/img/landing-img/img-5-soporte.jpg" alt="Desarrollo, Soporte y Mantenimiento Imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="productos">
    <div class="section-container container">
        <div class="content">
            <h2>Productos para tu negocio</h2>
            <div class="squares-4">
                <a href="productos/panini" class="square">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-panini-cover.jpg" alt="Panini">
                    </div>
                    <div class="square-content">
                        <h4>
                            Panini
                        </h4>
                        <p class="text-3">
                            Escáner para cheques y para la identificación
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
                <a href="productos/acf-technologies" class="square">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-acf-cover.jpg" alt="ACF Technologies">
                    </div>
                    <div class="square-content">
                        <h4>
                            ACF Technologies
                        </h4>
                        <p class="text-3">
                            Sistema de Gestión de Filas, Citas y Señalización Digital
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
                <a href="productos/couchbase" class="square">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-couchbase-cover.jpg" alt="Couchbase">
                    </div>
                    <div class="square-content">
                        <h4>
                            Couchbase
                        </h4>
                        <p class="text-3">
                            Base de Datos NoSQL para manejo de grandes volúmenes
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
                <div id="collapseProductos" class="squares-4 squares-4-xs collapse" data-bs-parent="#productos">
                    <a href="productos/security-scorecard" class="square">
                        <div class="square-img">
                            <img src="src/assets/img/productos-landing/producto-scorecard-cover.jpg" alt="Security ScoreCard">
                        </div>
                        <div class="square-content">
                            <h4>
                                Security ScoreCard
                            </h4>
                            <p class="text-3">
                                Plataforma de calificación de riesgos cibernéticos para todos los sectores
                            </p>
                            <button type="button" class="btn-type-2">
                                Leer más
                                <span class="arrow">
                                    <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                </span>
                            </button>
                        </div>
                    </a>
                    <a href="productos/corsight" class="square">
                        <div class="square-img">
                            <img src="src/assets/img/productos-landing/producto-corsight-cover.jpg" alt="Corsight">
                        </div>
                        <div class="square-content">
                            <h4>
                                Corsight
                            </h4>
                            <p class="text-3">
                                Protección de la Intimidad, "Privacidad por Diseño y por Defecto"
                            </p>
                            <button type="button" class="btn-type-2">
                                Leer más
                                <span class="arrow">
                                    <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                </span>
                            </button>
                        </div>
                    </a>
                    <a href="productos/tassta" class="square">
                        <div class="square-img">
                            <img src="src/assets/img/productos-landing/producto-tassta-cover.jpg" alt="TASSTA">
                        </div>
                        <div class="square-content">
                            <h4>
                                TASSTA
                            </h4>
                            <p class="text-3">
                                Sistema de Comunicación Innovadora (Comunicación encriptada, Localización, Organización y Seguridad)
                            </p>
                            <button type="button" class="btn-type-2">
                                Leer más
                                <span class="arrow">
                                    <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                                </span>
                            </button>
                        </div>
                    </a>
                </div>
                <button class="btn-type-4 squares-4-xs" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductos" aria-expanded="false" aria-controls="collapseProductos">
                    <span class="f">Mostrar todos los productos</span>
                    <span class="s">Ocultar</span>
                </button>
                <a href="productos/security-scorecard" class="square square-xs">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-scorecard-cover.jpg" alt="Security ScoreCard">
                    </div>
                    <div class="square-content">
                        <h4>
                            Security ScoreCard
                        </h4>
                        <p class="text-3">
                            Plataforma de calificación de riesgos cibernéticos para todos los sectores
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
                <a href="productos/corsight" class="square square-xs">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-corsight-cover.jpg" alt="Corsight">
                    </div>
                    <div class="square-content">
                        <h4>
                            Corsight
                        </h4>
                        <p class="text-3">
                            Protección de la Intimidad, "Privacidad por Diseño y por Defecto"
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
                <a href="productos/tassta" class="square square-xs">
                    <div class="square-img">
                        <img src="src/assets/img/productos-landing/producto-tassta-cover.jpg" alt="TASSTA">
                    </div>
                    <div class="square-content">
                        <h4>
                            TASSTA
                        </h4>
                        <p class="text-3">
                            Sistema de Comunicación Innovadora (Comunicación encriptada, Localización, Organización y Seguridad)
                        </p>
                        <button type="button" class="btn-type-2">
                            Leer más
                            <span class="arrow">
                                <img src="src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/Partners.php'); ?>

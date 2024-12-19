<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents('src/assets/data/products.json');
    $data = json_decode($jsonString, true);
    
    $sp = "producto";
    $spname = "couchbase";

    foreach ($data['products'] as $product) {
        if ($product['spname'] === $spname) {
            $headerTitle = $product['headerTitle'];
            $headerDescription = $product['headerDescription'];
            $headerImg = $product['headerImg'];
            $summaryTitle = $product['summaryTitle'];
            $summaryDescription = $product['summaryDescription'];
            break;
        }
    }
?>
<? include('src/components/Header.php'); ?>
<? include('src/components/Summary.php'); ?>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>¿Cuáles son las bases de datos NoSQL y por qué importan?</h3>
                <p class="text-3">
                    A medida que las empresas se desplazan a la Economía Digital, habilitada pro la nube, el móvil, las redes sociales y las tecnologías de big data, los desarrolladores y equipos de operaciones tienen que construir y mantener aplicaciones web, móviles y de IoT más rápido y a mayor escala.Flexible, de alto rendimiento NoSQL es cada vez más la tecnología de base de datos preferida para alimentar las aplicaciones de hoy en la web, móvil e IoT.
                </p>
            </div>
            <div class="image f contain">
                <img src="<? echo $path ?>src/assets/img/products/couchbase/img-2.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="image s contain">
                <img src="<? echo $path ?>src/assets/img/products/couchbase/img-3.jpg" alt="Producto/Servicio image">
            </div>
            <div class="info">
                <h3>Arquitectura de base de datos distribuida</h3>
                <p class="text-3">
                    Las aplicaciones modernas enfocadas en el usuario presentan necesidades específicas, como contar con diversos patrones de acceso a datos que simplifiquen la arquitectura, proporcionen movilidad y aseguren un rendimiento distribuido excelente en la nube que prefieras.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <p class="text-3 mb-4">
                    Cientos de empresas de Global 2000, junto con decenas de miles de empresas más pequeñas y startups, han adoptado NoSQL. Para muchos, el uso de NoSQL comenzó con una caché, prueba de concepto o una pequeña aplicación, luego se expandió aplicaciones objetivo de misión crítica, y agora es la base para todo desarrollo de aplicaciones.
                </p>
                <p class="text-3">
                    Con NoSQL, las empresas están en mejores condiciones de desarrollarse con agilidad y operar a cualquier escala y ofrecer el rendimiento y disponibilidad necesarios para satisfacer las demandas de las empresas de Economía Digital.
                </p>
            </div>
            <div class="image f contain">
                <img src="<? echo $path ?>src/assets/img/products/couchbase/img-4.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include('src/components/WhyGisnet.php'); ?>

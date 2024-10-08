<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents('src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "corsight";

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
                <h3>Velocidad incomparable</h3>
                <p class="text-3 pb-5">
                    La tecnología de Corsight AI es capaz de identificar de manera compatible a las personas en las listas de vigilancia incluso en las condiciones más desafiantes, superando problemas comunes como cubiertas faciales y entornos hostiles, a una velocidad inigualable.
                    <br>
                    Corsight AI está clasificada por el NIST como la compañía de reconocimiento facial con sede en Occidente con mejor rendimiento.
                </p>
            </div>
            <div class="image f">
                <img src="<? echo $path ?>src/assets/img/products/corsight/img-2.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="image s">
                <img src="<? echo $path ?>src/assets/img/products/corsight/img-3.jpg" alt="Producto/Servicio image">
            </div>
            <div class="info">
                <h3>Protección de la privacidad</h3>
                <p class="text-3 pb-5">
                    Corsight AI coloca la privacidad en el centro de su sistema y demuestra este compromiso con un puesto único de Director de Privacidad dentro de la empresa. Además, el sistema cumple con los requisitos regionales de privacidad de datos (GDPR, LGPD, PDPA, etc.) y las imágenes no se pueden reconstruir a partir de los datos.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>Máxima precisión</h3>
                <p class="text-3 pb-5">
                    Impulsada por la IA autónoma, la tecnología de reconocimiento facial de Corsight AI supera la capacidad del cerebro humano para identificar con precisión a las personas, independientemente de si llevan una máscara protectora u otra cobertura, si se encuentran en condiciones climáticas extremas o con poca luz, o si las fotos son tomadas en ángulos agudos o de grandes multitudes.
                </p>
            </div>
            <div class="image f">
                <img src="<? echo $path ?>src/assets/img/products/corsight/img-4.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include('src/components/WhyGisnet.php'); ?>

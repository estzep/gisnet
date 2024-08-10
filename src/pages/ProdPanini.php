<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "panini";

    foreach ($data['products'] as $product) {
        if ($product['spname'] === $spname) {
            $headerTitle = $product['headerTitle'];
            $headerDescription = $product['headerDescription'];
            $headerImg = $product['headerImg'];
            $clientsTitle = $product['clientsTitle'];
            $clientsDescription = $product['clientsDescription'];
            break;
        }
    }
?>
<? include($path.'src/components/Header.php'); ?>
<? include($path.'src/components/Clients.php'); ?>
<section>
    <div class="container section-container">
        <div class="content">
            <h3 class="text-center pb-5">¿Qué ofrece Panini?</h3>
            <div class="g-cards-1">
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-identidad-segura.png" alt="Icon">
                        </div>
                        <h6>Identidad Segura</h6>
                        <p class="text-4">
                            La última innovación de Panini, una obra maestra de la consolidación inteligente, aborda varias funciones clave para la verificación de la identidad y la autenticidad de los clientes de forma fiable e intuitiva.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Descubra BioCred
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-escaner-cheques.png" alt="Icon">
                        </div>
                        <h6>Escáner de Cheques</h6>
                        <p class="text-4">
                            Los sistemas de captura escalables de Panini responden a una variedad de modelos de procesamiento distribuido de cheques, ofreciendo un rendimiento y una fiabilidad superior.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Nuestra gama
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="g-card panini">
                    <div class="top">
                        <div class="icon">
                            <img src="<? echo $path ?>src/assets/img/panini-img/graphic-panini-innovacion-bancos.png" alt="Icon">
                        </div>
                        <h6>Innovación para los bancos</h6>
                        <p class="text-4">
                            Gracias a décadas de experiencia y a un profundo conocimiento de sus necesidades, podemos ofrecer sistemáticamente a nuestros clientes bancarios una mejora decisiva de sus procesos.
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<? echo($path) ?>" class="link btn-type-2">
                            Diferencia clave
                            <span class="arrow">
                                <img src="<? echo($path) ?>src/assets/icons/icon-arrow-right.svg" alt="Ir a" class="head">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content">
            Contenido...
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
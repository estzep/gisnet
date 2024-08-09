<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
    
    $jsonString = file_get_contents($path.'src/assets/data/products.json');
    $data = json_decode($jsonString, true);

    $spname = "acf-technologies";

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
    <div class="section-container container">
        <div class="content mixed-content-1">
            <div class="heading">
                <h3>
                    Acciones sobre la
                    <br>
                    atención de cliente
                </h3>
                <p class="text-1">
                    La plataforma cuenta con diferentes tipos de permisologías a través de grupos de usuarios y diferentes roles, y las acciones que pueden realizarse cuando se está atendiendo al usuario.
                </p>
            </div>
            <div class="info">
                <h3>Perspectiva del cliente</h3>
                <p class="text-1">
                    La plataforma cuenta con diferentes tipos de permisologías a través de grupos de usuarios y diferentes roles, y las acciones que pueden realizarse cuando se está atendiendo al usuario.
                </p>
                <p class="text-5">
                    <span class="bullet-point">•</span> Segmentación de clientes
                    <br>
                    <span class="bullet-point">•</span> Marketing One 2 One
                    <br>
                    <span class="bullet-point">•</span> Fidelización
                    <br>
                    <span class="bullet-point">•</span> Niveles de servicio
                    <br>
                    <span class="bullet-point">•</span> CRM Cartelización
                    <br>
                    <span class="bullet-point">•</span> Personalización
                </p>
            </div>
            <div class="image f">
                <img src="<? echo $path ?>src/assets/img/sp/placeholder.png" alt="Producto/Servicio image">
            </div>
            <div class="image s">
                <img src="<? echo $path ?>src/assets/img/sp/placeholder.png" alt="Producto/Servicio image">
            </div>
            <div class="info">
                <h3>Perspectiva del empleado</h3>
                <p class="text-1">
                    La plataforma cuenta con diferentes tipos de permisologías a través de grupos de usuarios y diferentes roles, y las acciones que pueden realizarse cuando se está atendiendo al usuario.
                </p>
                <p class="text-5">
                    <span class="bullet-point">•</span> Productividad
                    <br>
                    <span class="bullet-point">•</span> Trabajo
                    <br>
                    <span class="bullet-point">•</span> Calidad de Servicio
                    <br>
                    <span class="bullet-point">•</span> Ventas
                    <br>
                    <span class="bullet-point">•</span> CRM Cartelización
                    <br>
                    <span class="bullet-point">•</span> Personalización
                </p>
            </div>
            <div class="note">
                <p class="text-1 text-center">
                    De igual manera se cuenta con <span class="g-strong">diferentes indicadores</span> entre los cuáles destacan el  servicio al cliente, negocio, caja, ventas y back office.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0 pt-5">
            <div class="info">
                <h3>GISNET - Toma Turnos (Direccionadores)</h3>
                <p class="text-1">
                    Somos fabricantes de los Toma Turnos ó Podios para integrarse con el Sistema de Gestión de Filas que ofertamos.
                    <br>
                    Adicionalmente, damos el servicio de soporte y mantenimiento de los Toma Turnos a nivel nacional, tanto preventivo como correctivo.
                    <br>
                    Podemos incluir el soporte a los dispositivos para la Señalización Digital, tanto los players como las televisiones que operan en la sucursal.
                </p>
            </div>
            <div class="image f t">
                <img src="<? echo $path ?>src/assets/img/sp/placeholder.png" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
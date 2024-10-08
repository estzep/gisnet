<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>Especificaciones Técnicas del Toma Turnos</h3>
                <p class="text-3 g-strong">Touch Screen</p>
                <ul class="text-3 bullet-list">
                    <li>15" Tactil Touch- Screen</li>
                    <li>Anti-glade</li>
                    <li>Modo de Entrada: Dedo o Lápiz</li>
                    <li>Temperatura de funcionamiento: -10°c ~ +60°c</li>
                    <li>Temperatura de almacenamiento -20°c ~ +70°c</li>
                    <li>Transparencia: 85%</li>
                    <li>Linealidad: 10,0%</li>
                    <li>Dureza: 6H</li>
                    <li>Fuerzade Funcionamiento < 50 g</li>
                    <li>Prueba de Dibujo 100.00 veces</li>
                    <li>Prueba de golpe: 35 000 000 veces</li>
                    <li>Cubierta de Vidrio: 2 mm</li>
                </ul>
                <p class="text-3 g-strong">TFT</p>
                <ul class="text-3 bullet-list">
                    <li>15" TFT Liquit Crystal Display</li>
                    <li>Resolucion display 1024x768 pixel</li>
                    <li>Pixel pinch 0.297 (h) x 0.297 (v) mm</li>
                    <li>Pixel arrabgement RGB vertical stripe</li>
                    <li>Colores delñ display 16,2 Mio. Colores</li>
                    <li>Brillo 450 cd/m2</li>
                    <li>Contrast ratio 700:1</li>
                    <li>Viewing angle hor.: 80° / 80°, ver.: 80°/ 80°</li>
                    <li>Tiempo de respeuesta (response timec) 25 msec</li>
                    <li>Interface Analog-RGB H-Sysnc. / V_Sync // DVI</li>
                    <li>H-Sunc 31.4-80 Khz</li>
                    <li>V-Sync 60-75 Hz</li>
                    <li>Entrada de Power 12V DC</li>
                    <li>Consumo de Power (power consumption) 25 W</li>
                </ul>
            </div>
            <div class="image f contain">
                <img src="<? echo $path ?>src/assets/img/products/acf-technologies/img-5.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include('src/components/WhyGisnet.php'); ?>

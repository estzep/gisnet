<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section>
    <div class="section-container container">
        <div class="content mixed-content-1 pb-0">
            <div class="info">
                <h3>Especificaciones Técnicas del Toma Turnos</h3>
                <p class="text-3">Touch Screen</p>
                <ul class="text-3 bullet-list">
                    <il>15" Tactil Touch- Screen</il>
                    <il>Anti-glade</il>
                    <il>Modo de Entrada: Dedo o Lápiz</il>
                    <il>Temperatura de funcionamiento: -10°c ~ +60°c</il>
                    <il>Temperatura de almacenamiento -20°c ~ +70°c</il>
                    <il>Transparencia: 85%</il>
                    <il>Linealidad: 10,0%</il>
                    <il>Dureza: 6H</il>
                    <il>Fuerzade Funcionamiento < 50 g</il>
                    <il>Prueba de Dibujo 100.00 veces</il>
                    <il>Prueba de golpe: 35 000 000 veces</il>
                    <il>Cubierta de Vidrio: 2 mm</il>
                </ul>
                <p class="text-3">TFT</p>
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
                <img src="<? echo $path ?>src/assets/img/acf-img/img-5.jpg" alt="Producto/Servicio image">
            </div>
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>

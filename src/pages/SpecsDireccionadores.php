<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section>
    <div class="section-container container">
        <div class="content">
            Direccionadores...
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
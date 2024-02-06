<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<? include($path.'src/components/Header.php'); ?>
<section>
    <div class="container">
        <div class="content">
            migracion de acervos
        </div>
    </div>
</section>
<? include($path.'src/components/WhyGisnet.php'); ?>
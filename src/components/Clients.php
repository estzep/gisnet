<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section id="clientes" class="sp">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3><? echo $clientsTitle ?></h3>
                <p class="text-1">
                    <? echo $clientsDescription ?>
                </p>
            </div>
        </div>
    </div>
</section>
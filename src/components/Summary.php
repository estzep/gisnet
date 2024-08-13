<?php
    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section id="summary" class="sp">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3><? echo $summaryTitle ?></h3>
                <p class="text-1">
                    <? echo $summaryDescription ?>
                </p>
            </div>
        </div>
    </div>
</section>
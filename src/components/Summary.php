<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<section id="summary" class="sp">
    <div class="section-container container">
        <div class="content">
            <div class="heading">
                <h3 class="animate opacity"><? echo $summaryTitle ?></h3>
                <p class="text-1 animate opacity">
                    <? echo $summaryDescription ?>
                </p>
            </div>
        </div>
    </div>
</section>

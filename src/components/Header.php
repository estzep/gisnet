<?php
    $titleSP = "Testing test";
    $descriptionSP = "This is a testing description.";
?>

<header>
    <div class="container">
        <div class="content">
            <div class="info">
                <h1><? echo $titleSP ?></h1>
                <p class="text-1">
                    <? echo $descriptionSP ?>
                </p>
                <a href="<? echo $path ?>/contacto" class="btn-type-1 f-btn">
                    Quiero comenzar
                </a>
            </div>
            <div class="image">
                <img src="<? echo $path ?>" alt="Producto / Servicio image">
            </div>
        </div>
    </div>
</header>
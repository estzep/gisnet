<?php
    $title = 'Gisnet';
    $description = 'Gisnet description';
    $robots = 'noindex, nofollow';
    $url = 'https://gisnet.qartaonline.com';

    $base = $_SERVER['REQUEST_URI'];
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<!DOCTYPE html>
<html lang="es">
    <?php require("src/components/Head.php");?>
	<body>
        <?php require("app.php");?>
	</body>
</html>
<?php
    $title = 'Gisnet';
    $description = 'Gisnet description';
    $robots = 'noindex, nofollow';
    $url = 'https://gisnet.qartaonline.com';

    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
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
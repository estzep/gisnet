<?php
    $title = 'Gisnet';
    $robots = 'noindex, nofollow';
    $url = 'https://gisnet.qartaonline.com';

    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    echo "base: " . $base;
    $segments = count(array_filter(explode('/', $base)));
    echo "segments: " . $segments;
    $path = str_repeat('../', $segments);
    echo "path: " . $path;
?>

<!DOCTYPE html>
<html lang="es">
    <?php require($path."src/components/Head.php");?>
	<body>
        <?php require($path."app.php");?>
	</body>
</html>
<?php
    $title = 'Gisnet';
    $robots = 'noindex, nofollow';
    $url = 'https://qartaonline.com/gisnet/contact';

    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>

<!DOCTYPE html>
<html lang="es">
    <?php require($path."src/components/Head.php");?>
	<body>
        <?php echo $path; ?>
        <?php require($path."src/components/Layout.php");?>
	</body>
</html>
<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);

    $title = 'GISnet';
    $description = 'Líderes en soluciones y consultorías especializadas';
    $robots = 'noindex, nofollow';
    $url = 'https://gisnet.qartaonline.com';

    $metadataFile = 'src/assets/data/metadata.json';
    if (file_exists($metadataFile)) {
        $metadata = json_decode(file_get_contents($metadataFile), true);
        if (isset($metadata[$base])) {
            $title = $metadata[$base]['title'] ?? $title;
            $description = $metadata[$base]['description'] ?? $description;
            $robots = $metadata[$base]['robots'] ?? $robots;
        }
    }
?>

<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="<?php echo($robots); ?>">
    <meta name="author" content="Qarta Online">
    <title><?php echo($title);?></title>
    <meta name="description" content="<?php echo($description);?>">
    <link rel="canonical" href="<?php echo($url.$base);?>">
    <meta name="url" content="<?php echo($url.$base);?>">
    <link rel="icon" href="<?php echo($path);?>src/assets/img/logos/gisnet.png">
    <link rel="apple-touch-icon" href="<?php echo($path);?>src/assets/img/logos/gisnet.png">
    <meta name="msapplication-TileImage" content="<?php echo($path);?>src/assets/img/logos/gisnet.png">
    <!-- Redes Sociales -->
    <meta property="og:title" content="<?php echo($title);?>">
    <meta property="og:description" content="<?php echo($description);?>">
    <meta property="og:url" content="<?php echo($url.$base);?>">
    <meta property="og:site_name" content="GISnet">
    <meta property="og:image" content="<?php echo($url);?>/src/assets/img/logos/gisnet.png">
    <meta property="og:image:secure_url" content="<?php echo($url);?>/src/assets/img/logos/gisnet.png">
    <meta name="twitter:title" content="<?php echo($title);?>">
    <meta name="twitter:description" content="<?php echo($description);?>">
    <meta name="twitter:image" content="<?php echo($path);?>src/assets/img/gisnet/gisnet-universal.png">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo($path);?>src/assets/styles/fonts.css">
    <!-- <link rel="stylesheet" href="assets/styles/keyframes.css"> -->
    <link rel="stylesheet" href="<?php echo($path);?>src/assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo($path);?>src/assets/styles/style.css">
    <link rel="stylesheet" href="<?php echo($path);?>src/assets/styles/navbar.css">
    <link rel="stylesheet" href="<?php echo($path);?>src/assets/styles/footer.css">
    <!-- <link rel="stylesheet" href="assets/styles/scrollAppearEffect.css"> -->
</head>

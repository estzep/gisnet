<?php
if ($robots == "") { $robots = 'noindex, nofollow'; }
if ($title == "") { $robots = 'GISnet'; }
if ($url == "") { $url = 'https://qartaonline.com/gisnet'; }

?>

<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="<?php echo($robots); ?>">
    <meta name="author" content="Qarta Online">
    <title><?php echo($title);?></title>
    <meta name="description" content="Gisnet description">
    <link rel="canonical" href="<?php echo($url);?>">
    <meta name="url" content="<?php echo($url);?>">
    <link rel="icon" href="<?php echo($url);?>/src/assets/img/logo.webp">
    <link rel="apple-touch-icon" href="<?php echo($url);?>/src/assets/img/logo.webp">
    <meta name="msapplication-TileImage" content="<?php echo($url);?>/src/assets/img/logo.webp">
    <!-- Redes Sociales -->
    <meta property="og:title" content="<?php echo($title);?>">
    <meta property="og:description" content="Gisnet description">
    <meta property="og:url" content="<?php echo($url);?>">
    <meta property="og:site_name" content="GISnet">
    <meta property="og:image" content="<?php echo($url);?>/src/assets/img/logo.webp">
    <meta property="og:image:secure_url" content="<?php echo($url);?>/src/assets/img/logo.webp">
    <meta name="twitter:title" content="<?php echo($title);?>">
    <meta name="twitter:description" content="Gisnet description">
    <meta name="twitter:image" content="<?php echo($url);?>/src/assets/img/logo.webp">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/fonts.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/keyframes.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- <link rel="stylesheet" href="assets/css/scrollAppearEffect.css"> -->
</head>
<?php
    $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
?>
<?php include("src/components/Navbar.php");?>
<main>
    <?php
        $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        switch ($page) {
            case '/':
                include('src/pages/Home.php');
                break;
            case '/nosotros/':
                include('src/pages/AboutUs.php');
                break;
            case '/contacto/':
                include('src/pages/Contact.php');
                break;
            case '/servicios/migracion-de-acervos/':
                include('src/pages/ServMigracion.php');
                break;
            case '/servicios/implementacion-de-sistemas/':
                include('src/pages/ServImplementacion.php');
                break;
            case '/servicios/implementacion-de-sistemas/gisreg/':
                include('src/pages/DemoGisreg.php');
                break;
            case '/servicios/implementacion-de-sistemas/giscat/':
                include('src/pages/DemoGiscat.php');
                break;
            case '/servicios/limpieza-de-datos/':
                include('src/pages/ServLimpieza.php');
                break;
            case '/productos/panini/':
                include('src/pages/ProdPanini.php');
                break;
            case '/productos/couchbase/':
                include('src/pages/ProdCouchbase.php');
                break;
            case '/productos/acf-technologies/':
                include('src/pages/ProdAcf.php');
                break;
            case '/productos/acf-technologies/direccionadores/':
                include('src/pages/SpecsDireccionadores.php');
                break;
            case '/productos/security-scorecard/':
                include('src/pages/ProdSecurity.php');
                break;
            case '/productos/corsight/':
                include('src/pages/ProdCorsight.php');
                break;
            case '/productos/tassta/':
                include('src/pages/ProdTassta.php');
                break;
            case '/cobertura/':
                include('src/pages/Coverage.php');
                break;
            default:
                http_response_code(404);
                include('src/pages/Error.php');
                break;
        }
    ?>
</main>
<?php include("src/components/Footer.php");?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="<? echo($path) ?>src/assets/scripts/utils.js"></script>
<script src="<? echo($path) ?>src/assets/scripts/animations.js"></script>
<script src="<? echo($path) ?>src/assets/scripts/validateContactForm.js"></script>

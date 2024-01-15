<?php
    if ($path == "") { $path = ''; }
?>
<?php include($path."src/components/Navbar.php");?>
<main>
    <?php
        // $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $page = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
        // echo "The path: " . $path;

        switch ($page) {
            case '/':
                include($path.'src/pages/Home.php');
                break;
            case '/servicios/':
                include($path.'src/pages/Home.php');
                break;
            case '/nosotros/':
                include($path.'src/pages/Contact.php');
                break;
            case '/contacto/':
                include($path.'src/pages/Contact.php');
                break;
            default:
                include($path.'src/pages/Home.php');
                break;
        }
    ?>
</main>
<?php include($path."src/components/Footer.php");?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="<? echo($path) ?>src/assets/scripts/navbar.js"></script>
<!-- <script type="text/javascript"></script> -->
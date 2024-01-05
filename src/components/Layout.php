<?php include("/Navbar.php");?>
<main>
    layout1
    <?php
        $base = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        echo "The base: " . $base;
        $path = substr($_SERVER['REQUEST_URI'], strlen($base));
        echo "The path: " . $path;

        switch ($path) {
            case '/contact':
                include('pages/Contact.php');
                break;
            default:
                include('pages/Home.php');
                break;
        }
    ?>
    <section>
        layout2
        <?php
            $currentFilePath = __FILE__;
            
            echo "The path to the current file is: " . $currentFilePath;
        ?>
    </section>
</main>
<footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
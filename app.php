<?php
    $base = substr($_SERVER['REQUEST_URI'], strlen('/gisnet'));
    $segments = count(array_filter(explode('/', $base)));
    $path = str_repeat('../', $segments);
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
            case '/nosotros/':
                include($path.'src/pages/AboutUs.php');
                break;
            case '/contacto/':
                include($path.'src/pages/Contact.php');
                break;
            case '/servicios/':
                include($path.'src/pages/Error.php');
                break;
            case '/servicios/migracion-de-acervos/':
                include($path.'src/pages/ServMigracion.php');
                break;
            case '/servicios/implementacion-de-sistemas/':
                include($path.'src/pages/ServImplementacion.php');
                break;
            case '/servicios/limpieza-de-datos/':
                include($path.'src/pages/ServLimpieza.php');
                break;
            case '/productos/':
                include($path.'src/pages/Error.php');
                break;
            case '/productos/panini/':
                include($path.'src/pages/ProdPanini.php');
                break;
            case '/productos/couchbase/':
                include($path.'src/pages/ProdCouchbase.php');
                break;
            case '/productos/acf-technologies/':
                include($path.'src/pages/ProdAcf.php');
                break;
            case '/productos/security-scorecard/':
                include($path.'src/pages/ProdSecurity.php');
                break;
            case '/productos/corsight/':
                include($path.'src/pages/ProdCorsight.php');
                break;
            case '/productos/tassta/':
                include($path.'src/pages/ProdTassta.php');
                break;
            default:
                include($path.'src/pages/Error.php');
                break;
        }
    ?>
</main>
<?php include($path."src/components/Footer.php");?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="<? echo($path) ?>src/assets/scripts/utils.js"></script>
<script type="text/javascript">
    function validateContactForm() {
        var errors = 0;
        const form = document.getElementById("contactForm");
        const inputs = form.getElementsByTagName("input");
        const selects = form.getElementsByTagName("select");
        const textareas = form.getElementsByTagName("textarea");

        for (let i = 0; i < inputs.length; i++) {
            const input = inputs[i];
            if (input.hasAttribute("required")) {
                const name = input.getAttribute("name");
                const value = input.value;
                const error = document.getElementById(name + "Error");
                if (value === "") {
                    input.classList.remove("error");
                    error.classList.remove("show");
                    setTimeout(() => {
                        input.classList.add("error");
                        error.classList.add("show");
                    }, 200);
                    errors++;
                } else {
                    input.classList.remove("error");
                    error.classList.remove("show");
                }
            }
        }

        for (let i = 0; i < selects.length; i++) {
            const select = selects[i];
            if (select.hasAttribute("required")) {
                const name = select.getAttribute("name");
                const value = select.value;
                const error = document.getElementById(name + "Error");
                if (value == 0) {
                    select.classList.remove("error");
                    error.classList.remove("show");
                    setTimeout(() => {
                        select.classList.add("error");
                        error.classList.add("show");
                    }, 200);
                    errors++;
                } else {
                    select.classList.remove("error");
                    error.classList.remove("show");
                }
            }
        }

        for (let i = 0; i < textareas.length; i++) {
            const textarea = textareas[i];
            if (textarea.hasAttribute("required")) {
                const name = textarea.getAttribute("name");
                const value = textarea.value;
                const error = document.getElementById(name + "Error");
                if (value === "") {
                    textarea.classList.remove("error");
                    error.classList.remove("show");
                    setTimeout(() => {
                        textarea.classList.add("error");
                        error.classList.add("show");
                    }, 200);
                    errors++;
                } else {
                    textarea.classList.remove("error");
                    error.classList.remove("show");
                }
            }
        }

        return errors === 0;

        // var fname = document.forms["contactForm"]["fname"].value;
        // var lname = document.forms["contactForm"]["lname"].value;
        // var email = document.forms["contactForm"]["email"].value;
        // var country = document.forms["contactForm"]["country"].value;
        // var reason = document.forms["contactForm"]["reason"].value;
        // if (fname == "") {
        //     document.getElementById().classList.add("")
        //     return false;
        // }
    }
</script>
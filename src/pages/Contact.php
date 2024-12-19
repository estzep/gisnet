<?php
$fname = $_GET['nombre'];
$lname = $_GET['apellido'];
$company = $_GET['empresa'];
$tel = $_GET['telefono'];
$email = $_GET['correo'];
$reason = $_GET['asunto'];
$service = $_GET['servicio'];
$product = $_GET['producto'];
$other = $_GET['otro'];
$message = $_GET['mensaje'];

$servicesJson = file_get_contents('./src/assets/data/services.json');
$productsJson = file_get_contents('./src/assets/data/products.json');
$servicesData = json_decode($servicesJson, true);
$productsData = json_decode($productsJson, true);
$reasonsData = [
    'servicio' => 'Consulta sobre servicio',
    'producto' => 'Consulta sobre producto',
    'consulta-general' => 'Consulta general', 
    'soporte' => 'Soporte',
    'otro' => 'Otro'
];

$validReason = false;
if (array_key_exists($reason, $reasonsData)) {
    $validReason = true;
}

$validService = false;
if ($reason === 'servicio' && isset($service)) {
    foreach ($servicesData['services'] as $serviceItem) {
        if ($serviceItem['spname'] === $service) {
            $validService = true;
            break;
        }
    }
}

$validProduct = false;
if ($reason === 'producto' && isset($product)) {
    foreach ($productsData['products'] as $productItem) {
        if ($productItem['spname'] === $product) {
            $validProduct = true;
            break;
        }
    }
}


$mail = $_GET['mail'];
?>

<section id="contactPage">
    <div class="section-container container">
        <div class="content">
            <div class="contact-card">
                <h2>Contacta a GISnet</h2>
                <p class="text-2">
                    Llena el siguiente formulario o envía un correo a <a href="mailto:info@e-gisnet.com">info@e-gisnet.com</a> y te responderemos a la brevedad.
                    <br>
                    <?php
                    if ($mail == 'sent') {
                        echo '<span class="success-msg">Correo enviado correctamente</span>';
                    } else if ($mail == 'error') {
                        echo '<span class="error-msg">Error al enviar el correo</span>';
                    }
                    ?>
                </p>
                <form name="contactForm" id="contactForm" action="../src/assets/scripts/contact.php" class="contact-form" onsubmit="return validateContactForm()" method="POST" novalidate>
                    <div class="form-column">
                        <input name="fname" id="fname" type="text" placeholder="* Nombre" required oninput="validateInput(this)" value="<?php echo $fname; ?>">
                        <span id="fnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="lname" id="lname" type="text" placeholder="* Apellido" required oninput="validateInput(this)" value="<?php echo $lname; ?>">
                        <span id="lnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="company" id="company" type="text" placeholder="Compañia" value="<?php echo $company; ?>">
                        <span id="companyError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="tel" id="tel" type="tel" placeholder="Teléfono" min="0" value="<?php echo $tel; ?>">
                        <span id="telError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <input name="email" type="email" id="email" placeholder="* Correo electrónico" required oninput="validateInput(this)" value="<?php echo $email; ?>">
                        <span id="emailError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <select name="reason" id="reasonSelect" class="<?php echo ($validReason) ? '' : 'disabled'; ?>" required onchange="handleSelects(), validateInput(this)">
                            <option value="0" <?php echo ($validReason) ? '' : 'selected'; ?> disabled>* Elegir asunto</option>
                            <?php
                            foreach ($reasonsData as $key => $value) {
                                echo "<option value=\"{$key}\"" . ($reason === $key ? ' selected' : '') . ">{$value}</option>";
                            }
                            ?>
                        </select>
                        <span id="reasonError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="service" class="form-column full <?php echo ($reason === 'servicio') ? '' : 'hidden'; ?>">
                        <select name="service" id="serviceSelect" class="<?php echo ($validService) ? '' : 'disabled'; ?>" onchange="handleSelects(), validateInput(this)">
                            <option value="0" <?php echo ($validService) ? '' : 'selected'; ?> disabled>* Seleccionar servicio</option>
                            <?php
                            foreach ($servicesData['services'] as $serviceItem) {
                                echo "<option value=\"{$serviceItem['spname']}\"" . ($service === $serviceItem['spname'] ? ' selected' : '') . ">{$serviceItem['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="serviceError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="product" class="form-column full <?php echo ($reason === 'producto') ? '' : 'hidden'; ?>">
                        <select name="product" id="productSelect" class="<?php echo ($validProduct) ? '' : 'disabled'; ?>" onchange="handleSelects(), validateInput(this)">
                            <option value="0" <?php echo ($validProduct) ? '' : 'selected'; ?> disabled>* Seleccionar producto</option>
                            <?php
                            foreach ($productsData['products'] as $productItem) {
                                echo "<option value=\"{$productItem['spname']}\"" . ($product === $productItem['spname'] ? ' selected' : '') . ">{$productItem['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="productError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="other" class="form-column full <?php echo ($reason === 'other') ? '' : 'hidden'; ?>">
                        <input name="other" type="text" id="otherInput" placeholder="* Ingresar un asunto" oninput="validateInput(this)" value="<?php echo $other; ?>">
                        <span id="otherError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <textarea name="message" id="message" rows="5" placeholder="* Mensaje" required oninput="validateInput(this)"><?php echo $message; ?></textarea>
                        <span id="messageError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <button name="submit" type="submit" class="btn-type-1">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

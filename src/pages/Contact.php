<?php
$fname = $_GET['nombre'];
$lname = $_GET['apellido'];
$company = $_GET['empresa'];
$tel = $_GET['telefono'];
$email = $_GET['correo'];
$message = $_GET['mensaje'];

$servicesJson = file_get_contents('./src/assets/data/services.json');
$productsJson = file_get_contents('./src/assets/data/products.json');
$servicesData = json_decode($servicesJson, true);
$productsData = json_decode($productsJson, true);

$reason = $_GET['asunto'];
$reasonSelected = isset($reason) ? true : false;
$serviceSelected = (in_array($reason, array_column($servicesData['services'], 'spname'))) ? true : false;
$productSelected = (in_array($reason, array_column($productsData['products'], 'spname'))) ? true : false;

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
                        <input name="fname" id="fname" type="text" placeholder="* Nombre" required oninput="validateInput(this)">
                        <span id="fnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="lname" id="lname" type="text" placeholder="* Apellido" required oninput="validateInput(this)">
                        <span id="lnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="company" id="company" type="text" placeholder="Compañia">
                        <span id="companyError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="tel" id="tel" type="tel" placeholder="Teléfono" min="0">
                        <span id="telError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <input name="email" type="email" id="email" placeholder="* Correo electrónico" required oninput="validateInput(this)">
                        <span id="emailError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <select name="reason" id="reasonSelect" class="<?php echo ($reasonSelected) ? '' : 'disabled'; ?>" required onchange="handleSelects(), validateInput(this)">
                            <option value="0" selected disabled>* Elegir asunto</option>
                            <option value="1" <?php echo ($serviceSelected) ? 'selected' : ''; ?>>Consulta sobre servicio</option>
                            <option value="2" <?php echo ($productSelected) ? 'selected' : ''; ?>>Consulta sobre producto</option>
                            <option value="3" <?php echo ($reason === '3') ? 'selected' : ''; ?>>Consulta general</option>
                            <option value="4" <?php echo ($reason === '4') ? 'selected' : ''; ?>>Soporte</option>
                            <option value="5" <?php echo ($reason === '5') ? 'selected' : ''; ?>>Otro</option>
                        </select>
                        <span id="reasonError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="service" class="form-column full <?php echo ($serviceSelected) ? '' : 'hidden'; ?>">
                        <select name="service" id="serviceSelect" class="<?php echo ($serviceSelected) ? '' : 'disabled'; ?>" onchange="handleSelects(), validateInput(this)">
                            <option value="0" <?php echo ($serviceSelected) ? '' : 'selected'; ?> disabled>* Seleccionar servicio</option>
                            <?php
                            foreach ($servicesData['services'] as $service) {
                                echo "<option value=\"{$service['id']}\"" . ($reason === $service['spname'] ? ' selected' : '') . ">{$service['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="serviceError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="product" class="form-column full <?php echo ($productSelected) ? '' : 'hidden'; ?>">
                        <select name="product" id="productSelect" class="<?php echo ($productSelected) ? '' : 'disabled'; ?>" onchange="handleSelects(), validateInput(this)">
                            <option value="0" <?php echo ($productSelected) ? '' : 'selected'; ?> disabled>* Seleccionar producto</option>
                            <?php
                            foreach ($productsData['products'] as $product) {
                                echo "<option value=\"{$product['id']}\"" . ($reason === $product['spname'] ? ' selected' : '') . ">{$product['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="productError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="other" class="form-column full <?php echo ($reason === '5') ? '' : 'hidden'; ?>">
                        <input name="other" type="text" id="otherInput" placeholder="* Ingresar un asunto" oninput="validateInput(this)">
                        <span id="otherError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <textarea name="message" id="message" rows="5" placeholder="* Mensaje" required oninput="validateInput(this)"></textarea>
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

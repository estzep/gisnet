<?php
$servicesJson = file_get_contents('./src/assets/data/services.json');
$productsJson = file_get_contents('./src/assets/data/products.json');
$servicesData = json_decode($servicesJson, true);
$productsData = json_decode($productsJson, true);

$asunto = isset($_GET['asunto']) ? $_GET['asunto'] : '';
$spSelected = $asunto === '' ? true : false;
$serviceSelected = (in_array($asunto, array_column($servicesData['services'], 'spname'))) ? true : false;
$productSelected = (in_array($asunto, array_column($productsData['products'], 'spname'))) ? true : false;
?>

<section id="contactPage">
    <div class="section-container container">
        <div class="content">
            <div class="contact-card">
                <h2>Contacta a GISnet</h2>
                <p class="text-2">
                    Llena el siguiente formulario o envía un correo a <a href="mailto:info@e-gisnet.com">info@e-gisnet.com</a> y te responderemos a la brevedad.
                </p>
                <form name="contactForm" id="contactForm" action="../src/assets/scripts/contact.php" class="contact-form" onsubmit="return validateContactForm()" method="post" novalidate>
                    <div class="form-column">
                        <input name="fname" id="fname" type="text" placeholder="* Nombre" required>
                        <span id="fnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="lname" id="lname" type="text" placeholder="* Apellido" required>
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
                        <input name="email" type="email" id="email" placeholder="* Correo electrónico" required>
                        <span id="emailError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <select name="reason" id="reasonSelect" class="<?php echo ($spSelected) ? 'disabled' : ''; ?>" required onchange="handleSelects()">
                            <option value="0" selected disabled>Elegir asunto</option>
                            <option value="1" <?php echo ($serviceSelected) ? 'selected' : ''; ?>>Consulta sobre servicio</option>
                            <option value="2" <?php echo ($productSelected) ? 'selected' : ''; ?>>Consulta sobre producto</option>
                            <option value="3">Consulta general</option>
                            <option value="4">Soporte</option>
                            <option value="5">Otro</option>
                        </select>
                        <span id="reasonError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div name="service" id="service" class="form-column full <?php echo ($serviceSelected) ? '' : 'hidden'; ?>" <?php echo ($serviceSelected) ? 'required' : ''; ?>>
                        <select name="service" id="serviceSelect" class="<?php echo ($serviceSelected) ? '' : 'disabled'; ?>" onchange="handleSelects()">
                            <option value="0" <?php echo ($serviceSelected) ? '' : 'selected'; ?> disabled>Seleccionar servicio</option>
                            <?php
                            foreach ($servicesData['services'] as $service) {
                                echo "<option value=\"{$service['spname']}\"" . ($asunto === $service['spname'] ? ' selected' : '') . ">{$service['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="serviceError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div name="product" id="product" class="form-column full <?php echo ($productSelected) ? '' : 'hidden'; ?>" <?php echo ($productSelected) ? 'required' : ''; ?>>
                        <select name="product" id="productSelect" class="<?php echo ($productSelected) ? '' : 'disabled'; ?>" onchange="handleSelects()">
                            <option value="0" <?php echo ($productSelected) ? '' : 'selected'; ?> disabled>Seleccionar producto</option>
                            <?php
                            foreach ($productsData['products'] as $product) {
                                echo "<option value=\"{$product['spname']}\"" . ($asunto === $product['spname'] ? ' selected' : '') . ">{$product['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                        <span id="productError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <textarea name="message" id="message" rows="5" placeholder="* Mensaje" required></textarea>
                        <span id="messageError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <button type="submit" class="btn-type-1">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
function handleSelects() {
    var reasonSelect = document.getElementById('reasonSelect');
    var reasonValue = reasonSelect.value;
    var service = document.getElementById('service');
    var serviceSelect = document.getElementById('serviceSelect');
    var product = document.getElementById('product');
    var productSelect = document.getElementById('productSelect');

    if (reasonValue !== '0') {
        reasonSelect.classList.remove('disabled');
    }
    if (serviceSelect.value !== '0') {
        serviceSelect.classList.remove('disabled');
    }
    if (productSelect.value !== '0') {
        productSelect.classList.remove('disabled');
    }

    if (reasonValue === '1') {
        product.classList.add('hidden');
        productSelect.removeAttribute('required');
    
        service.classList.remove('hidden');
        serviceSelect.setAttribute('required', 'true');
    } else if (reasonValue === '2') {
        service.classList.add('hidden');
        serviceSelect.removeAttribute('required');

        product.classList.remove('hidden');
        productSelect.setAttribute('required', 'true');
    }
}

// Call the function on page load to handle pre-selected values
window.onload = handleSelects;
</script>

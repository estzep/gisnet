<?php
$servicesJson = file_get_contents('./src/assets/data/services.json');
$productsJson = file_get_contents('./src/assets/data/products.json');
$servicesData = json_decode($servicesJson, true);
$productsData = json_decode($productsJson, true);

$asunto = isset($_GET['asunto']) ? $_GET['asunto'] : '';
?>

<section id="contactPage">
    <div class="section-container container">
        <div class="content">
            <div class="contact-card">
                <h2>Contacta a ventas</h2>
                <p class="text-2">Llena el siguiente formulario y te responderemos a la brevedad.</p>
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
                    </div>
                    <div class="form-column">
                        <input name="tel" id="tel" type="tel" placeholder="Teléfono" min="0">
                    </div>
                    <div class="form-column full">
                        <input name="email" type="email" id="email" placeholder="* Correo electrónico" required>
                        <span id="emailError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <select name="reason" id="reason" required onchange="showAdditionalSelect()">
                            <option value="0" selected default disabled>Elegir asunto</option>
                            <option value="1">Consulta sobre servicio</option>
                            <option value="2">Consulta sobre producto</option>
                            <option value="3">Consulta general</option>
                            <option value="4">Soporte</option>
                            <option value="5">Otro</option>
                        </select>
                        <span id="reasonError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div id="serviceSelect" class="form-column full">
                        <select name="service" id="service">
                            <option value="" default disabled>Seleccionar servicio</option>
                            <?php
                            foreach ($servicesData['services'] as $service) {
                                echo "<option value=\"{$service['spname']}\">{$service['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div id="productSelect" class="form-column full">
                        <select name="product" id="product">
                            <option value="" default disabled>Seleccionar producto</option>
                            <?php
                            foreach ($productsData['products'] as $product) {
                                echo "<option value=\"{$product['spname']}\">{$product['headerTitle']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-column full">
                        <textarea name="message" id="message" rows="5" placeholder="* Mensaje"></textarea>
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
function showAdditionalSelect() {
    var reason = document.getElementById('reason').value;
    var serviceSelect = document.getElementById('serviceSelect');
    var productSelect = document.getElementById('productSelect');
    
    serviceSelect.classList.add('hidden');
    productSelect.classList.add('hidden');
    
    if (reason === 'consulta_servicio') {
        serviceSelect.style.display = 'block';
    } else if (reason === 'consulta_producto') {
        productSelect.style.display = 'block';
    }
}

// Call the function on page load to handle pre-selected values
window.onload = showAdditionalSelect;
</script>

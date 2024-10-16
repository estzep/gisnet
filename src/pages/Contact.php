<?php
$servicesJson = file_get_contents('../assets/data/services.json');
$servicesData = json_decode($servicesJson, true);
$productsJson = file_get_contents('../assets/data/products.json');
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
                        <input name="lname" id="lname" type="text" placeholder="* Apellido">
                        <span id="lnameError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column xs-full">
                        <input name="email" type="email" id="email" placeholder="* Correo electrónico" required>
                        <span id="emailError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column xs-full">
                        <input name="company" id="company" type="text" placeholder="* Compañia">
                        <span id="companyError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <select name="country" id="country" required>
                            <option value="mexico" default>México</option>
                        </select>
                        <span id="countryError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column">
                        <input name="tel" id="tel" type="tel" placeholder="* Teléfono" min="0">
                        <span id="telError" class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column full">
                        <select name="reason" id="reason" required>
                            <option value="0" default>Elegir asunto</option>
                            <optgroup label="Servicios">
                                <?php
                                foreach ($servicesData['services'] as $service) {
                                    $selected = ($asunto === $service['spname']) ? 'selected' : '';
                                    echo "<option value=\"{$service['spname']}\" $selected>{$service['headerTitle']}</option>";
                                }
                                ?>
                            </optgroup>
                            <optgroup label="Productos">
                                <?php
                                foreach ($productsData['products'] as $product) {
                                    $selected = ($asunto === $product['spname']) ? 'selected' : '';
                                    echo "<option value=\"{$product['spname']}\" $selected>{$product['headerTitle']}</option>";
                                }
                                ?>
                            </optgroup>
                            <option value="other">Otro</option>
                        </select>
                        <span id="reasonError" class="error-msg">Este campo es obligatorio</span>
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
<section>
    <div class="section-container container">
        <div class="content">
            <div class="contact-card">
                <h2>Contacta a ventas</h2>
                <p>Llena el siguiente formulario y te responderemos a la brevedad.</p>
                <form action="" class="contact-form row">
                    <div class="form-column col-12 col-sm-6">
                        <input name="fname" type="text" placeholder="* Nombre" required>
                        <span class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column col-12 col-sm-6">
                        <input name="lname" type="text" placeholder="* Apellido">
                    </div>
                    <div class="form-column col-12 col-sm-6">
                        <input name="email" type="email" placeholder="* Correo electrónico">
                        <span class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column col-12 col-sm-6">
                        <input name="company" type="text" placeholder="* Compañia">
                    </div>
                    <div class="form-column col-12 col-sm-6">
                        <select name="country" id="country">
                            <option value="mexico" default>México</option>
                        </select>
                        <span class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column col-12 col-sm-6">
                        <input name="tel" type="number" placeholder="* Teléfono">
                    </div>
                    <div class="form-column col-12">
                        <select name="reason" id="reason" required>
                            <optgroup label="Servicios">
                                <option value="migracion-de-acervos">Migración de Acervos</option>
                                <option value="implementacion-de-sistemas">Implementación de Sistemas</option>
                                <option value="limpieza-de-datos">Limpieza de Datos</option>
                                <option value="desarrollo-soporte-mantenimiento">Desarrollo, Soporte y Mantenimiento</option>
                            </optgroup>
                            <optgroup label="Productos">
                                <option value="panini">Panini</option>
                                <option value="acf-technologies">ACF Technologies</option>
                                <option value="couchbase">Couchbase</option>
                                <option value="security-scorecard">Security ScoreCard</option>
                                <option value="corsight">Corsight</option>
                                <option value=scale-fusion"">Scale Fusion</option>
                                <option value="tassta">TASSTA</option>
                            </optgroup>
                        </select>
                        <span class="error-msg">Este campo es obligatorio</span>
                    </div>
                    <div class="form-column col-12">
                        <textarea name="message" id="message" cols="4" placeholder="* Mensaje"></textarea>
                    </div>
                    <div class="form-column col-12">
                        <button type="submit" class="btn-type-1">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
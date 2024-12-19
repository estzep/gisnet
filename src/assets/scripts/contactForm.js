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
}

function handleSelects() {
    var reasonSelect = document.getElementById('reasonSelect');
    var reasonValue = reasonSelect.value;

    var service = document.getElementById('service');
    var serviceSelect = document.getElementById('serviceSelect');
    var product = document.getElementById('product');
    var productSelect = document.getElementById('productSelect');
    var other = document.getElementById('other');
    var otherInput = document.getElementById('otherInput');

    if (reasonValue !== '0') {
        reasonSelect.classList.remove('disabled');
    }
    if (serviceSelect.value !== '0') {
        serviceSelect.classList.remove('disabled');
    }
    if (productSelect.value !== '0') {
        productSelect.classList.remove('disabled');
    }

    if (reasonValue === 'servicio') {
        product.classList.add('hidden');
        productSelect.removeAttribute('required');
        other.classList.add('hidden');
        otherInput.removeAttribute('required');

        service.classList.remove('hidden');
        serviceSelect.setAttribute('required', 'true');
    } else if (reasonValue === 'producto') {
        service.classList.add('hidden');
        serviceSelect.removeAttribute('required');
        other.classList.add('hidden');
        otherInput.removeAttribute('required');

        product.classList.remove('hidden');
        productSelect.setAttribute('required', 'true');
    } else if (reasonValue === 'otro') {
        product.classList.add('hidden');
        productSelect.removeAttribute('required');
        service.classList.add('hidden');
        serviceSelect.removeAttribute('required');

        other.classList.remove('hidden');
        otherInput.setAttribute('required', 'true');
    } else {
        service.classList.add('hidden');
        serviceSelect.removeAttribute('required');

        product.classList.add('hidden');
        productSelect.removeAttribute('required');

        other.classList.add('hidden');
        otherInput.removeAttribute('required');
    }
}

function validateInput(input) {
    const name = input.getAttribute("name");
    const value = input.value;
    const error = document.getElementById(name + "Error");

    if (value === '' || value == 0) {
        input.classList.remove("error");
        error.classList.remove("show");
        setTimeout(() => {
            input.classList.add("error");
            error.classList.add("show");
        }, 200);
    } else {
        input.classList.remove('error');
        error.classList.remove('show');
    }
}

function handleErrors() {
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('mailError');
    const input = document.getElementsByName(error)[0];
    input.classList.add('error');
}

function onLoad() {
    handleSelects();
    handleErrors();
}

window.onload = onLoad;
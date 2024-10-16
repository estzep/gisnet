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

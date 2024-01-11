function toggleNav() {
    var body = document.getElementsByTagName("body")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    if (navbar.classList.contains("open")) {
        body.classList.remove("overflow-y-hidden");
        navbar.classList.remove("open");
    } else {
        body.classList.add("overflow-y-hidden");
        navbar.classList.add("open");
    }
}
function toggleNav() {
    var navbar = document.getElementsByTagName("nav")[0];
    if (navbar.classList.contains("open")) {
        navbar.classList.remove("open");
    } else {
        navbar.classList.add("open");
    }
}
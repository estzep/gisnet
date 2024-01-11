function toggleNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    if (navbar.classList.contains("open")) {
        html.classList.remove("overflow-y-hidden");
        navbar.classList.remove("open");
    } else {
        html.classList.add("overflow-y-hidden");
        navbar.classList.add("open");
    }
}

function closeNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    html.classList.remove("overflow-y-hidden");
    navbar.classList.remove("open");
}

function openNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    html.classList.add("overflow-y-hidden");
    navbar.classList.add("open");
}
document.addEventListener("DOMContentLoaded", function() {
    function mainPadding() {
        var navbar = document.getElementsByTagName("nav")[0];
        var navbarHeight = navbar.offsetHeight;
        
        document.documentElement.style.setProperty('--navbar-height', navbarHeight + "px");
    }
    
    mainPadding();
    
    window.addEventListener("resize", function() {
        mainPadding();
    });
});

function closeNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    html.classList.remove("overflow-y-hidden");
    navbar.classList.remove("open");

    var accordionBtns = document.getElementsByClassName("accordion-button");
    var accordionCollapse = document.getElementsByClassName("accordion-collapse");
    for (var i = 0; i < accordionBtns.length; i++) {
        const btn = accordionBtns[i];
        btn.classList.add("collapsed");
        btn.setAttribute("aria-expanded", "false");
    }
    for (var i = 0; i < accordionCollapse.length; i++) {
        const collapse = accordionCollapse[i];
        collapse.classList.remove("show");
    }

}

function openNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    html.classList.add("overflow-y-hidden");
    navbar.classList.add("open");
}

function toggleNav() {
    var navbar = document.getElementsByTagName("nav")[0];
    if (navbar.classList.contains("open")) {
        closeNav();
    } else {
        openNav();
    }
}
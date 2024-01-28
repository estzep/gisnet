document.addEventListener("DOMContentLoaded", function() {
    function mainPadding() {
        var navbar = document.getElementsByTagName("nav")[0];
        var navbarHeight = navbar.offsetHeight;

        // var dropdowns = document.querySelectorAll(".accordion-collapse");
        
        document.documentElement.style.setProperty('--navbar-height', navbarHeight + "px");
    }
    
    mainPadding();
    
    window.addEventListener("resize", function() {
        mainPadding();
        closeNav();
    });
    
    // window.addEventListener("click", function(event) {
    //     if (!dropdown.contains(event.target)) {
    //         closeAccordions();
    //     }
    // });
});

function closeAccordion() {
    const collapseElementList = document.querySelectorAll('.collapse')
    const collapseList = [...collapseElementList].map(collapseEl => new bootstrap.Collapse(collapseEl))

    // var accordionToggler = document.getElementsByClassName("accordion-toggler");
    // var accordionCollapse = document.getElementsByClassName("accordion-collapse");
    // for (var i = 0; i < accordionToggler.length; i++) {
    //     const toggler = accordionToggler[i];
    //     toggler.classList.add("collapsed");
    //     toggler.setAttribute("aria-expanded", "false");
    // }
    // for (var i = 0; i < accordionCollapse.length; i++) {
    //     const collapse = accordionCollapse[i];
    //     collapse.classList.remove("show");
    // }
}

function closeNav() {
    var html = document.getElementsByTagName("html")[0];
    var navbar = document.getElementsByTagName("nav")[0];
    html.classList.remove("overflow-y-hidden");
    navbar.classList.remove("open");
    closeAccordion();
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
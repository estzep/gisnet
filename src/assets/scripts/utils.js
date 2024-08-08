document.addEventListener("DOMContentLoaded", function() {
    const sociosCarouselInner = document.getElementById('sociosCarouselInner');

    function sociosCarouselMargin() {
        try {
            var carousel = document.getElementById('sociosCarousel');
            var inner = document.getElementById('sociosCarouselInner');
            var carouselRight = carousel.getBoundingClientRect().right;
            var windowWidth = window.innerWidth;

            var distanceToWindowRight = windowWidth - carouselRight;
            inner.style.marginRight = -distanceToWindowRight + 'px';
        } catch {}
    }

    function mainPadding() {
        var navbar = document.getElementsByTagName("nav")[0];
        var navbarHeight = navbar.offsetHeight;
        document.documentElement.style.setProperty('--navbar-height', navbarHeight + "px");
    }
    
    mainPadding();
    sociosCarouselMargin();
    
    window.addEventListener("resize", function() {
        mainPadding();
        closeNav();
        sociosCarouselMargin();
        closeProductosAccordion();
    });

    window.addEventListener("click", function(event) {
        try {
            var navbarCollapse = document.querySelector(".g-navbar-collapse.show");
            if (!navbarCollapse.contains(event.target)) {
                closeAccordions();
            }
        } catch (error) {}
    });

    if (sociosCarouselInner) {
        sociosCarouselInner.addEventListener('scroll', disableCarouselControls);
    }
});

function closeAccordions() {
    const accordions = document.querySelectorAll('.g-navbar-collapse');
    accordions.forEach(accordion => new bootstrap.Collapse(accordion, { toggle: false }).hide());
    
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
    closeAccordions();
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

const disableCarouselControls = () => {
    try {
        var carousel = document.getElementById('sociosCarousel');
        var inner = document.getElementById('sociosCarouselInner');
        var controls = carousel.querySelectorAll('.control');
        const currentScroll = inner.scrollLeft;
        controls[0].disabled = currentScroll === 0;
        controls[1].disabled = currentScroll + inner.clientWidth >= inner.scrollWidth - 1;
    } catch {}
}

function moveCarousel(direction) {
    var inner = document.getElementById('sociosCarouselInner');
    var itemWidth = inner.querySelector('.item').offsetWidth;
    var scrollAmount = direction === 'left' ? -(itemWidth + 10) : itemWidth + 10;

    inner.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
    });
};

function closeProductosAccordion() {
    const accordion = document.querySelector('#collapseProductos');
    if (accordion) {
        new bootstrap.Collapse(accordion, { toggle: false }).hide();
    }
}

function changeTab2(event) {
    const tabs2 = event.closest('.tabs-2');

    const oldTab = tabs2.getElementsByClassName('tab active')[0];
    oldTab.classList.add('hide');
    const oldControl = tabs2.getElementsByClassName('control active')[0];
    oldControl.classList.remove('active');

    const newTabId = event.getAttribute('data-control');
    const newTab = document.getElementById(`tab-${newTabId}`);
    newTab.classList.add('show');
    event.classList.add('active');
    event.disabled = true;
    setTimeout(() => {
        newTab.classList.add('active');
        oldTab.classList.remove('active');
        oldTab.classList.remove('hide');
        newTab.classList.remove('show');

        oldControl.disabled = false;
    }, 400);
}

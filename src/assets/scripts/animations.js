initAnimations();

function initAnimations() {
	var elements = document.getElementsByClassName("animate");
	var positions = [];
	for (var i = 0; i < elements.length; i++) {
		positions.push(elements[i].getBoundingClientRect().top);
	}
	sessionStorage.setItem("positions",positions);

	for (var j = 0; j < elements.length; j++) {
		var position = positions[j];
		if (window.scrollY + (window.innerHeight * 0.95) >= position) {
			elements[j].setAttribute("data-state","show");
		} else {
			elements[j].setAttribute("data-state","hide");
		}
	}
}

window.onscroll = () => {
	var elements = document.getElementsByClassName("animate");
	var positions = (sessionStorage.getItem("positions")).split(",");
	var scrollPos = window.scrollY + (window.innerHeight * 0.85);
	for (var i = 0; i < elements.length; i++) {
		var position = positions[i];
		if (elements[i].getAttribute("data-state") === "hide" && scrollPos >= position) {
			elements[i].setAttribute("data-state","show");
		}
	}
}

window.addEventListener("resize", initAnimations);

appearEffect();

function appearEffect() {
	var el = document.getElementsByClassName("scrollApp");
	var array = [];
	for (var i = 0; i < el.length; i++) {
		array.push(el[i].getBoundingClientRect().top);
		sessionStorage.setItem("array",array);
	}
	sessionStorage.setItem("array",array);
	for (var j = 0; j < el.length; j++) {
		var elTop = array[j];
		if (window.pageYOffset + (window.innerHeight * 0.7) >= elTop) {
			el[j].classList.add("scrollApp-true");
		}
	}
}

window.onscroll = function() {
	var el = document.getElementsByClassName("scrollApp");
	var array = (sessionStorage.getItem("array")).split(",");
	var scrollPos = window.pageYOffset + (window.innerHeight * 0.7);
	for (var i = 0; i < el.length; i++) {
		var elTop = array[i];
		if (!el[i].classList.contains("scrollApp-true") && scrollPos >= elTop) {
			el[i].classList.add("scrollApp-true");
		}
	}
}

window.addEventListener("resize", appearEffect);

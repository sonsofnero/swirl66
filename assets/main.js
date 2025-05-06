// import external dependencies
import "jquery";

// Webpack Imports
import * as bootstrap from "bootstrap";

// core version + navigation, pagination modules:
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

/**
 * ************************************************
 *  sticky header
 * ************************************************
 */

const nav = document.querySelector(".follow-bar");

function checkPosition() {
	let windowY = window.scrollY;

	if (windowY < 100) {
		// Scrolling UP
		nav.classList.remove("follow-bar__reveal");
	} else {
		// Scrolling DOWN
		nav.classList.add("follow-bar__reveal");
	}
}

window.addEventListener("scroll", checkPosition);

/**
 * ************************************************
 *  mobile menu
 * ************************************************
 */

// Variables
const bodyLock = document.body;
const hamburgers = document.querySelectorAll(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const closeBtn = document.querySelectorAll(".closebtn");

// Function to toggle 'lock' class on body
function toggleBodyLock() {
	bodyLock.classList.toggle("lock");
}

// Function to toggle 'active' class on elements
function addClass(element) {
	element.classList.add("on");
}

function removeClass(element) {
	element.classList.remove("on");
}

// Event listeners for flyout menu
hamburgers.forEach((hamburger) => {
	hamburger.addEventListener("click", (e) => {
		e.preventDefault();
		toggleBodyLock();
		addClass(mobileMenu);
	});
});

// Event listeners to close menus
closeBtn.forEach((close) => {
	close.addEventListener("click", (e) => {
		e.preventDefault();
		toggleBodyLock();
		removeClass(mobileMenu);
	});
});

/**
 * ************************************************
 *  swipers
 * ************************************************
 */

/* eslint-disable */
var swiperHero = new Swiper(".hero__slider", {
	loop: true,
	navigation: {
		nextEl: ".slider-pagination__right",
		prevEl: ".slider-pagination__left",
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});

var swiperLocations = new Swiper(".location-bar-swiper", {
	slidesPerView: 3,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: ".location-btn-next",
		prevEl: ".location-btn-prev",
	},
	breakpoints: {
		768: {
			slidesPerView: 3,
		},
		1080: {
			slidesPerView: 4,
		},
		1300: {
			slidesPerView: 6,
		},
	},
});
/* eslint-enable */

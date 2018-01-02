
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('film-trailer', require('./components/FilmTrailer.vue'));

// const app = new Vue({
//     el: '#app'
// });

// TODO: Move this functionality to a seperate module
let quotes = $('.rotating-quotes .quote');
let start = 0;
let keepTime = 8000; // milliseconds
let fadeSpeed = 500 // milliseconds

quoteChange(start);

function quoteChange(currentQuote) {
	setTimeout(function () {
		$(quotes[currentQuote]).fadeOut(fadeSpeed, function () {
			let next = currentQuote + 1 >= quotes.length ? 0 : currentQuote + 1; 
			$(quotes[next]).fadeIn(fadeSpeed, function () {
				quoteChange(next);
			});
		});
	}, keepTime);
}

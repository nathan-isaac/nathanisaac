/**
 * Load jQuery and Bootstrap jQuery, used for front-end interaction.
 */
if (window.$ === undefined || window.jQuery === undefined) {
    window.$ = window.jQuery = require('jquery');
}

/**
 * Load Moment.js, used for date formatting and presentation.
 */
require('bootstrap-sass/assets/javascripts/bootstrap');

/**
 * Load AnimateScroll.js, used for smooth scrolling on a single page. 
 */
require('animatescroll.js');
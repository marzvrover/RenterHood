
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function() {
    $('.search select.filter').on('change', function() {
        $('.search select.filter').val(this.value);
    });
    $('.search input.query').on('keyup', function(e) {
        $(this).addClass('inputting');
        $('.search input.query').not('.inputting').val(this.value);
        $(this).removeClass('inputting')
    });
});

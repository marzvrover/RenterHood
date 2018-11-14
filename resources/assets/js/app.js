
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {
    $('.search select.filter').on('change', function() {
        $('.search select.filter').val(this.value);
    });
    $('.search input.query').on('keyup', function(e) {
        $(this).addClass('inputting');
        $('.search input.query').not('.inputting').val(this.value);
        $(this).removeClass('inputting')
    });

    $('footer.footer').stickyFooter();
});

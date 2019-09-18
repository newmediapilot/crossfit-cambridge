/**
 * main js
 **/


/**
 * close menu on body click
 */
(function ($) {
    $('body>div').click(function () {
        if ($('.navbar-collapse.collapse.show').length) {
            $('.navbar-toggler').click();
        }
    });
})(jQuery);


/**
 * end main js
 **/

console.log('init main.js');
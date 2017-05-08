/**
 * Created by ivan on 09.04.17.
 */

(function( $ ) {

    $(window).on('load', function() {

        initPreloader();

    });

    function initPreloader() {
        var $preloader = $('#pagePreloader'),
            $spinner = $preloader.find('.spinner');

        $spinner.fadeOut();

        $preloader.delay(350).fadeOut('slow');
    }

})(jQuery);
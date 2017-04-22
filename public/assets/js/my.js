(function ($) {
    $(function () {


        // Enable mobile side navbar  
        $('.button-collapse').sideNav({

            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens

        });

        $('.parallax').parallax();

        let mq = window.matchMedia("(max-width: 991px)");

        function adjust() {
            // For big devices only
            if (!mq.matches) {
                $(".site-nav").addClass("navbar-fixed");
            } else {

                $(".site-nav").removeClass("navbar-fixed");
            }
        }

        $(window).on('load', adjust);
        $(window).on('resize', adjust);

        $.ajax({
            url: 'https://randomuser.me/api/',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });

        // Enable smooth scrolling - source: css-tricks
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
       
    }); // end of document ready
})(jQuery); // end of jQuery name space

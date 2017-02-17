/*!
 * Terra Landscape
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

 (function ($) {
    "use strict";  // Start of use strict

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($(anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });
    $("#header-carousel").owlCarousel({
        lazyLoad : true,
        slideSpeed: 200,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true,
        addClassActive: true,
        beforeMove: function () {
            // BEFORE going to the next slide (hide captions)
            $("#header-carousel .inner").fadeOut("fast");
        },
        afterMove: function () {
            //// AFTER going to next slide (show captions)
            $("#header-carousel .inner").fadeIn("slow");
        }
    });

    $("#owl-team").owlCarousel({
        slideSpeed: 200,
        paginationSpeed: 600,
        singleItem: true,
        autoPlay: true,
    });

    Adjust();

    // To do after window is resized with 200 ms timeout.
    $(window).bind('resize', function (e)
    {
        window.resizeEvt;
        $(window).resize(function ()
        {
            clearTimeout(window.resizeEvt);
            window.resizeEvt = setTimeout(function ()
            {
                Adjust();
            }, 250);
        });
    });

    function Adjust() {
        //set Header start
        $('header').css('margin-top', $('nav').outerHeight());

        if ($("#header-carousel img").height() < $(window).height()) {
            var height = $("#header-carousel img").height();
            $("#header-carousel").css('height', height);
            $("#header-carousel .owl-wrapper-outer").css('height', height);
            $("#header-carousel .owl-wrapper-outer .item").css('height', height);
        } else {
            var height = $(window).height() - $('nav').outerHeight() - $("#header-carousel .owl-controls").outerHeight();
            $("#header-carousel").css('height', height);
            $("#header-carousel .owl-wrapper-outer").css('height', height);
            $("#header-carousel .owl-wrapper-outer .item").css('height', height);
        }

        $('#header-carousel .inner').css('bottom', $('#header-carousel .inner').outerHeight());

        if ($(window).width() < 450) {
            $('#header-carousel .inner').css('padding', '10px 5px');
            $('#header-carousel .inner').css('bottom', $('#header-carousel .inner').outerHeight());
        }
    }

    $(document).ready(function () {
        $('.dropdown-toggle[href="#"]').dropdown();

        $('.modal').on('hide.bs.modal', function (e) {
            //destroy owl gallery for this modal.
            var owl_galery_id = $(this).attr("id") + "_owl";
            $("#" + owl_galery_id).remove();
        })

        $('.portfolio-box').on('click', function (e) {
            var modal_id = $(this).data("target");
            var imgDir = $(modal_id + " .project-gallery").attr("title");
            var images = [];
            $(modal_id + " .project-gallery .gimage").each(function () {
                images.push($(this).attr("title"));
            });

            var owl_galery_id = modal_id.replace("#", "") + "_owl";
            var owl_galery_html = "";
            owl_galery_html += "<div id=\"" + owl_galery_id + "\" class=\"owl-carousel owl-theme\">";
            $.each(images, function (index, value) {
                owl_galery_html += "<div class=\"item\"><img src=\"" + imgDir + "/" + value + "\"></div>";
            });
            owl_galery_html += "</div>"

            $(modal_id + " .project-gallery").after(owl_galery_html);

            var owl = $("#" + owl_galery_id);
            var options = {
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoHeight : true,
            };
            owl.owlCarousel(options);
        });
});

})(jQuery);



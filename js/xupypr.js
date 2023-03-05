/**
 * Template Name: OnePage - v2.0.0
 * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
"use strict";
$(document).ready(function() {
    $(".lang-select .current").mouseover(function() {
        $(".lang-select ul.list").css("display", "flex");
    })
    .mouseout(function() {
        $(".lang-select ul.list").css("display", "none");
    });
    
    $(".lang-select ul.list").mouseover(function() {
        $(".lang-select ul.list").css("display", "flex");
    })
    .mouseout(function() {
        $(".lang-select ul.list").css("display", "none");
    });
//});

/*!(function ($) {
    "use strict";*/

    $('.btn-detailed').click(function () {
        let target = $(this).attr("data-target");
        let title = $(this).attr("data-whatever");

        $("#currentTitle").val(title);
        $('#direction').val(title);
        //console.log(target);
        //console.log(title);

        let map1 = $(target + " #map1 input").val();
        let map2 = $(target + " #map2 input").val();
        let map3 = $(target + " #map3 input").val();

        $(target + " #map1 iframe").attr("src", map1);
        $(target + " #map2 iframe").attr("src", map2);
        $(target + " #map3 iframe").attr("src", map3);
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });

    // Porfolio isotope and filter
    $(window).on('load', function () {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item'
        });

        $('#portfolio-flters li').on('click', function () {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({
                filter: $(this).data('filter')
            });
            aos_init();
        });

        // Initiate venobox (lightbox feature used in portofilo)
        $(document).ready(function () {
            $('.venobox').venobox({
                'spinner': 'cube-grid',
                'frameheight': '100%',
                'share': false
            });
        });
    });

    // Portfolio details carousel
    $(".portfolio-details-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        items: 1
    });

    // Initi AOS
    function aos_init() {
        AOS.init({
            duration: 1000,
            once: true
        });
    }
    aos_init();
});
//})(jQuery);
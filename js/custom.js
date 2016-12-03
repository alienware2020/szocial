/*==================================
Toggle Menu 
====================================*/
jQuery(document).ready(function () {

    $('a.navbar-brand, .navbar-nav a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('#navbar-menu > ul > li > a').removeClass('link-hover');
                if ($(this).attr('class') != 'navbar-brand') {
                    $(this).addClass('link-hover');
                }
                $('html, body').animate({
                    scrollTop: target.offset().top - 130
                }, 500);
                return false;
            }
        }
    });

    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

    /* =================================
    SKILL                     
    =================================== */
    $('.dial').each(function () {
        $(this).appear(function () {
            var elm = $(this);
            var color = elm.attr("data-fgColor");
            var perc = elm.attr("value");

            elm.knob({
                'value': 0,
                'min': 0,
                'max': 100,
                "skin": "tron",
                "readOnly": true,
                "thickness": .14,
                'dynamicDraw': true,
                "displayInput": false,
                'fgColor': '#f06d37',
                'bgColor': '#1e1e1e',
                'width': '182',
                'height': '182'
            });

            $({ value: 0 }).animate({ value: perc }, {
                duration: 1000,
                easing: 'swing',
                progress: function () {
                    elm.val(Math.ceil(this.value)).trigger('change')
                }
            });

            //circular progress bar color
            $(this).append(function () {
                elm.parent().parent().find('.circular-bar-content').css('color', color);
                elm.parent().parent().find('.circular-bar-content label').text(perc + '%');
            });

        });
    });

    /* =====================================
    Top Carousel Section 
    ========================================*/
    $("#owl-top").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

    });
    /* =====================================
    Post Carousel Section 
    ========================================*/
    $("#owl-post").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        itemsTablet: [768, 1],
        itemsTabletSmall: [767, 1]
    });
    /* =====================================
    Portfolio(Megafolio) Section 
    ========================================*/
    var api = $('.megafolio-container').megafoliopro(
		{
		    filterChangeAnimation: "rotatescale",    // fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
		    filterChangeSpeed: 800,                  // Speed of Transition
		    filterChangeRotate: 99,                  // If you ue scalerotate or rotate you can set the rotation (99 = random !!)
		    filterChangeScale: 0.6,                  // Scale Animation Endparameter
		    delay: 20,                               // The Time between the Animation of single mega-entry points
		    paddingHorizontal: 0,                   // Padding between the mega-entrypoints
		    paddingVertical: 0,
		    layoutarray: [6]     // Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.

		});

    // CALL FILTER FUNCTION IF ANY FILTER HAS BEEN CLICKED
    $('.filter').click(function () {
        $('.filter').removeClass("active");
        api.megafilter($(this).data('category'));
        $(this).addClass("active");
    });
    /* =====================================
    Scrollspy Section 
    ========================================*/
    $('body').scrollspy({ target: ".navbar", offset: 50 });

    // Add smooth scrolling on all links inside the navbar
    $("#bs-example-navbar-collapse-1 a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });
});
/* =====================================
Accordion Section 
========================================*/
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
/* =====================================
Bottom to Top Section 
========================================*/
if (($(window).height() + 100) < $(document).height()) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: { top: 100 }
    });
}









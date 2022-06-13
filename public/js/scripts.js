$('.slideshow').carousel({
    interval: !1,
    wrap: !1
});
$(document).ready(function() {
    $('body').addClass('loaded');
    $('.dropdown-toggle').on('click', function() {
        $(this).parents('li').find('.dropdown-menu').slideToggle();
        $('.dropdown-toggle').not(this).parents('li').find('.dropdown-menu').slideUp()
    })

    visibleElement();
    $(".navigation .dropdown .dropdown-toggle").on('click', function() {
        $(".navigation .dropdown .dropdown-toggle").not($(this)).removeClass("move-menu-arrow");
        $(this).toggleClass("move-menu-arrow")
    })

    $(".mba-settings .dropdown .dropdown-toggle").on('click', function() {
        $(".mba-settings .dropdown .dropdown-toggle").not($(this)).removeClass("move-menu-arrow");
        $(this).toggleClass("move-menu-arrow")
    });
    if (window.location.hash == '#menu-preview') {
        $('#nav-toggle').trigger('click')
    }

    $('.dynt-btn').on('click', function() {
        $(".theme-night").toggleClass("theme-day")
        
    });

    var outerContent = $('.interest');
    var innerContent = $('.interest > .form');
    outerContent.scrollLeft((innerContent.width() - outerContent.width()) / 2);

    if ($('.fadeOut').length > 0) {
        $('.fadeOut').owlCarousel({
            items: 3,
            loop: !0,
            margin: 20,
            nav: !0,
            dots: !1,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1024: {
                    items: 2
                },
                1200: {
                    items: 2
                },
            }
        })
    }
});

function checkForInput(element) {
    const $label = $(element).siblings('label');
    if ($(element).val().length > 0) {
        $label.addClass('input-has-value')
    } else {
        $label.removeClass('input-has-value')
    }
}
$('.form-group input').each(function() {
    checkForInput(this)
});
$('.form-group input').on('change keyup', function() {
    checkForInput(this)
});
$('#nav-toggle').on('click', function() {
    //$(".close").trigger("click");
    if ($(this).hasClass("navBtnActive")) {
        $("#bs-navbar").animate({
            left: "-300px"
        }, 300);
        $(this).removeClass('navBtnActive');
        $('body').removeClass('scroll-stop')
    } else {
        $("#bs-navbar").animate({
            left: "0"
        }, 300);
        $(this).addClass('navBtnActive');
        $('body').addClass('scroll-stop')
    }
});
$('.close').on('click', function() {
    $("#bs-navbar").animate({
        left: "-300px"
    }, 300);
    $("#nav-toggle").removeClass('navBtnActive');
    $('body').removeClass('scroll-stop')
});
$('#toggle-form').on('click', function() {
    if ($(this).hasClass("navBtnActive")) {
        $("#form-expand").animate({
            right: "-66.66667%"
        }, 300);
        $(this).removeClass('navBtnActive')
    } else {
        $("#form-expand").animate({
            right: "0"
        }, 300);
		$('#form-expand').find('input').focus();
        $(this).addClass('navBtnActive')
    }
});
(function($) {
    $.fn.visible = function(partial) {
        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === !0 ? _bottom : _top,
            compareBottom = partial === !0 ? _top : _bottom;
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop))
    }
})(jQuery);
var win = $(window);
var allMods = $(".module");
allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(!0)) {
        el.addClass("already-visible")
    }
});
win.scroll(function(event) {
    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(!0)) {
            el.addClass("come-in")
        }
    })
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".clearheader").addClass("darkheader")
    } else {
        $(".clearheader").removeClass("darkheader")
    }

    visibleElement();
});

function visibleElement() {
    $(".animate").each(function() {
        var windowPos = $(window).scrollTop();
        var reqPos = $(window).scrollTop() + ($(window).height() - 50);
        var btnTopOffset = $(this).offset().top - 75;
        if (btnTopOffset < reqPos) {
            $(this).addClass('begin-animate')
        } else {
            $(this).removeClass('begin-animate')
        }
    })
}
$(".open-pushmenu").on('click', function() {
    $(".push-menu-right").addClass('push-right-body')
});
$(".close-nav-5").on('click', function() {
    $(".push-menu-right").removeClass('push-right-body')
});
$('.has-dropdown').on('click', function() {
    $(this).toggleClass('active');
    $('.has-dropdown').not(this).removeClass('active');
    $($(this).find('a').attr('href')).slideToggle();
    $('.drop-menu-content').not($(this).find('a').attr('href')).slideUp()
});
$('.navigation-02 .dropdown').on('click', function() {
    $(this).addClass('move-arrow');
    $(this).removeClass('move-arrow')
});

$('.favme').on('click', function() {
    $(this).toggleClass('active')
});
(function() {
    var shareButtons = document.querySelectorAll(".share-btn");
    if (shareButtons) {
        [].forEach.call(shareButtons, function(button) {
            button.addEventListener("click", function(event) {
                var width = 650,
                    height = 450;
                event.preventDefault();
                window.open(this.href, 'Share Dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=' + width + ',height=' + height + ',top=' + (screen.height / 2 - height / 2) + ',left=' + (screen.width / 2 - width / 2))
            })
        })
    }
})();

(function($) {
    $(window).on("load", function() {
        if($('#content-5').length > 0) {
            $("#content-5").mCustomScrollbar({
                axis: "x",
                theme: "dark-thin",
                autoExpandScrollbar: !0,
                advanced: {
                    autoExpandHorizontalScroll: !0
                }
            });
        }
        if($('#content-6').length > 0) {
            $("#content-6").mCustomScrollbar({
                axis: "x",
                theme: "dark-thin",
                autoExpandScrollbar: !0,
                advanced: {
                    autoExpandHorizontalScroll: !0
                }
            });
        }
        if($('#content-6-1').length > 0) {
            $("#content-6-1").mCustomScrollbar({
                axis: "x",
                theme: "dark-thin",
                autoExpandScrollbar: !0,
                advanced: {
                    autoExpandHorizontalScroll: !0
                }
            });
        }
    })
})(jQuery);
if ($('.owl-carousel-01').length > 0) {
    $('.owl-carousel-01').owlCarousel({
        stagePadding: 400,
        loop: !0,
        margin: 10,
        nav: !1,
        items: 1,
        lazyLoad: !0,
        responsive: {
            0: {
                items: 1,
                stagePadding: 40
            },
            600: {
                items: 1,
                stagePadding: 100
            },
            1000: {
                items: 2,
                stagePadding: 160
            },
            1200: {
                items: 2,
                stagePadding: 180
            },
            1400: {
                items: 2,
                stagePadding: 200
            },
            1600: {
                items: 2,
                stagePadding: 220
            },
            1800: {
                items: 3,
                stagePadding: 220
            }
        }
    })
}
$(document).ready(function() {
    function detect_active() {
        var get_active = $("#dp-slider .dp_item:first-child").data("class");
        $("#dp-dots li").removeClass("active");
        $("#dp-dots li[data-class=" + get_active + "]").addClass("active")
    }
    $("#dp-next").on('click', function() {
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:first-child").hide().appendTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function(index, dp_item) {
            $(dp_item).attr('data-position', index + 1)
        });
        detect_active()
    });
    $("#dp-prev").on('click', function() {
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:last-child").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function(index, dp_item) {
            $(dp_item).attr('data-position', index + 1)
        });
        detect_active()
    });
    $("#dp-dots li").on('click', function() {
        $("#dp-dots li").removeClass("active");
        $(this).addClass("active");
        var get_slide = $(this).attr('data-class');
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function(index, dp_item) {
            $(dp_item).attr('data-position', index + 1)
        })
    });
    $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function() {
        var get_slide = $(this).attr('data-class');
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function(index, dp_item) {
            $(dp_item).attr('data-position', index + 1)
        });
        detect_active()
    })
});
$(function() {
    $(".login").css({
        height: $(window).innerHeight() + 'px'
    });
    $(window).on("resize", function() {
    //$(window).resize(function() {
        $(".login").css({
            height: $(window).innerHeight() + 'px'
        })
    })
});
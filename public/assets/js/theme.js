const { defaultsDeep } = require("lodash");

(function (a) {
    var e = a(".timer"); e.length && e.appear(function () { e.countTo() }); a(window).on("scroll", function () { var b = a(".sticky-menu"); 100 <= a(window).scrollTop() ? b.addClass("fixed") : b.removeClass("fixed") }); a(window).on("scroll", function () { 200 < a(this).scrollTop() ? a(".scroll-top").fadeIn() : a(".scroll-top").fadeOut() }); a(".scroll-top").on("click", function () { a("html, body").animate({ scrollTop: 0 }, 1500); return !1 }); a("a.scroll-target").on("click", function () {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//,
            "") || location.hostname == this.hostname) { var b = a(this.hash); b = b.length ? b : a("[name=" + this.hash.slice(1) + "]"); if (b.length) return a("html,body").animate({ scrollTop: b.offset().top - 120 }, 1E3), !1 }
    }); var g = window.location.href.substr(window.location.href.lastIndexOf("/") + 1); a(".navbar-nav > li  a").each(function () { a(this).attr("href") != g && "" != a(this).attr("href") || a(this).addClass("active") }); if (a(".mixitUp-container").length) { var c = document.querySelector(".mixitUp-container"); mixitup(c) } if (a(".user-data-form").length) a(".passVicon").on("click",
        function () { a(".passVicon").toggleClass("eye-slash"); var b = a(".pass_log_id"); "password" === b.attr("type") ? b.attr("type", "text") : b.attr("type", "password") }); a(".companies-logo-slider").length && a(".companies-logo-slider").slick({
            centerMode: !0, centerPadding: "0px", slidesToShow: 7, prevArrow: a(".prev"), nextArrow: a(".next"), autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 991, settings: { arrows: !0, centerMode: !0, slidesToShow: 5 } }, { breakpoint: 768, settings: { arrows: !0, centerMode: !0, slidesToShow: 3 } }, {
                breakpoint: 480,
                settings: { arrows: !0, centerMode: !0, slidesToShow: 2 }
            }]
        }); a(".partnerSliderTwo").length && a(".partnerSliderTwo").slick({ centerMode: !0, centerPadding: "0px", arrows: !1, slidesToShow: 5, autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 992, settings: { centerMode: !0, slidesToShow: 4 } }, { breakpoint: 768, settings: { centerMode: !0, slidesToShow: 3 } }, { breakpoint: 480, settings: { centerMode: !0, slidesToShow: 2 } }] }); a(".clientSliderOne").length && a(".clientSliderOne").slick({
            centerMode: !0, centerPadding: "0px", slidesToShow: 1,
            prevArrow: a(".prev_c"), nextArrow: a(".next_c"), autoplay: !0, rtl: !0, autoplaySpeed: 6E3
        }); a(".img-slick-slider").length && a(".img-slick-slider").slick({ dots: !0, arrows: !1, centerPadding: "0px", slidesToShow: 1, autoplay: !0, rtl: !0, autoplaySpeed: 6E3 }); a(".clientSliderTwo").length && a(".clientSliderTwo").slick({ dots: !0, arrows: !1, centerMode: !0, centerPadding: "0px", slidesToShow: 3, slidesToScroll: 3, autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 992, settings: { slidesToShow: 2 } }, { breakpoint: 576, settings: { slidesToShow: 1 } }] });
    a(".teamSliderOne").length && a(".teamSliderOne").slick({ dots: !1, arrows: !0, prevArrow: a(".prev_c"), nextArrow: a(".next_c"), centerPadding: "0px", slidesToShow: 4, slidesToScroll: 1, autoplay: !1, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 768, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } }, { breakpoint: 480, settings: { slidesToShow: 1 } }] }); a(".clientSliderThree").length && a(".clientSliderThree").slick({
        dots: !1, arrows: !0, prevArrow: a(".prevT"), nextArrow: a(".nextT"), centerPadding: "0px", slidesToShow: 1,
        slidesToScroll: 1, autoplay: !1, rtl: !0, autoplaySpeed: 3E3
    }); a(".clientSliderFour").length && a(".clientSliderFour").slick({ dots: !0, arrows: !1, centerPadding: "0px", slidesToShow: 3, slidesToScroll: 3, autoplay: !1, autoplaySpeed: 3E3, rtl: !0, responsive: [{ breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 2 } }, { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }); a(".clientSliderFive").length && a(".clientSliderFive").slick({
        centerMode: !0, centerPadding: "0px", slidesToShow: 1, prevArrow: a(".prev_f"), nextArrow: a(".next_f"),
        autoplay: !0, rtl: !0, autoplaySpeed: 6E3
    }); a(".clientSliderSix").length && a(".clientSliderSix").slick({ dots: !0, arrows: !1, centerMode: !0, centerPadding: "0px", slidesToShow: 3, slidesToScroll: 3, autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 1200, settings: { slidesToShow: 2, slidesToScroll: 2 } }, { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }); a(".clientSliderSeven").length && a(".clientSliderSeven").slick({
        centerMode: !0, centerPadding: "0px", slidesToShow: 1, prevArrow: a(".prev_cs1"), nextArrow: a(".next_cs1"),
        autoplay: !0, fade: !0, rtl: !0, autoplaySpeed: 6E3
    }); a(".clientSliderEight").length && a(".clientSliderEight").slick({ dots: !0, arrows: !1, centerPadding: "0px", slidesToShow: 3, slidesToScroll: 1, autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 1200, settings: { slidesToShow: 2, slidesToScroll: 2 } }, { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }); a(".app-preview-slider-one").length && a(".app-preview-slider-one").slick({
        dots: !1, arrows: !1, centerPadding: "0px", slidesToShow: 3, centerMode: !0, slidesToScroll: 1,
        autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2, centerMode: !1 } }]
    }); a(".app-preview-slider-two").length && a(".app-preview-slider-two").slick({ dots: !1, arrows: !1, centerPadding: "0px", slidesToShow: 5, centerMode: !0, slidesToScroll: 1, autoplay: !0, autoplaySpeed: 3E3, rtl: !0, responsive: [{ breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } }, { breakpoint: 480, settings: { slidesToShow: 1 } }] }); a(".portfolio_slider_one").length &&
        a(".portfolio_slider_one").slick({ dots: !1, arrows: !0, prevArrow: a(".prev_case1"), nextArrow: a(".next_case1"), centerPadding: "0px", slidesToShow: 3, slidesToScroll: 1, autoplay: !1, centerMode: !0, rtl: !0, autoplaySpeed: 3E3 }); a(".portfolio_slider_two").length && a(".portfolio_slider_two").slick({
            dots: !1, arrows: !0, prevArrow: a(".prev_case2"), nextArrow: a(".next_case2"), centerPadding: "0px", slidesToShow: 3, slidesToScroll: 1, autoplay: !1, centerMode: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 576, settings: { slidesToShow: 1 } }]
        }); a(".portfolio_slider_three").length && a(".portfolio_slider_three").slick({ dots: !1, arrows: !0, prevArrow: a(".prev_c"), nextArrow: a(".next_c"), centerPadding: "0px", slidesToShow: 4, slidesToScroll: 1, autoplay: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 992, settings: { slidesToShow: 3 } }, { breakpoint: 576, settings: { slidesToShow: 2 } }, { breakpoint: 480, settings: { slidesToShow: 1 } }] }); a(".product_slider_one").length && a(".product_slider_one").slick({
            dots: !1, arrows: !0, prevArrow: a(".prev_p1"),
            nextArrow: a(".next_p1"), centerPadding: "0px", slidesToShow: 3, slidesToScroll: 1, autoplay: !1, centerMode: !0, rtl: !0, autoplaySpeed: 3E3, responsive: [{ breakpoint: 1200, settings: { slidesToShow: 2 } }, { breakpoint: 576, settings: { slidesToShow: 1 } }]
        }); a("input,textarea").each(function () { a(this).data("holder", a(this).attr("placeholder")); a(this).on("focusin", function () { a(this).attr("placeholder", "") }); a(this).on("focusout", function () { a(this).attr("placeholder", a(this).data("holder")) }) }); c = a(".doc-sidebar ul li.dropdown-holder>h4");


    var h = a(".doc-sidebar .sec-menu"); a(".doc-sidebar ul li.dropdown-holder .expander"); c.on("click", function (b) { b.preventDefault() }); c.append(function () { return '<span class="expander"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>' }); c.on("click", function () { a(this).parent("li").children("ul").hasClass("show") ? a(this).parent("li").children("ul").removeClass("show") : (a(".sub-menu.show").removeClass("show"), a(this).parent("li").children("ul").addClass("show")) }); h.on("click", function () {
        a(this).parent("li").children("ul").hasClass("open") ?
            a(this).parent("li").children("ul").removeClass("open") : (a(".sub-menu.open").removeClass("open"), a(this).parent("li").children("ul").addClass("open"))
    });



    c = a(".card .card-header");
    c.on("click", function (b) { b.preventDefault() });
    c.on("click", function () { a(this).parent(".card").children(".collapse").hasClass("show") ? a(this).parent(".card").children(".collapse").removeClass("show") : (a(".collapse.show").removeClass("show"), a(this).parent(".card").children(".collapse").addClass("show")) }); if (a(".main-side-nav").length) a(".main-side-nav a").on("click",
        function () { if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) { var b = a(this.hash); b = b.length ? b : a("[name=" + this.hash.slice(1) + "]"); if (b.length) return a("html, body").animate({ scrollTop: b.offset().top - 100 }, 800), !1 } }); a(".theme-main-menu").length && (a(".theme-main-menu .navbar-toggler").on("click", function () { a(".navbar-collapse").toggleClass("show"); a(this).toggleClass("open") }), a(".dropdown-menu .dropdown-toggle").on("click", function (b) {
            a(this).next().hasClass("show") ||
                a(this).parents(".dropdown-menu").first().find(".show").removeClass("show"); a(this).next(".dropdown-menu").toggleClass("show"); return !1
        })); a("#one-page-nav .nav-link").on("click", function () { a(".navbar-collapse").removeClass("show"); a(".navbar-toggler").removeClass("open") }); if (a(".doc-sidebar").length) a(".doc-sidebar .btn").on("click", function () { a(".doc-links").toggleClass("show") }); a(".js-tilt").length && a(".js-tilt").tilt({ glare: !0, maxGlare: .3 });




    a("#contact-form").length && (a("#contact-form").validator())
    // a("#contact-form").on("submit", function (b) { if (!b.isDefaultPrevented()) return a.ajax({ type: "POST", url: "inc/contact.php", data: a(this).serialize(), success: function (d) { var f = "alert-" + d.type; d = d.message; var k = '<div class="alert ' + f + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + d + "</div>"; f && d && (a("#contact-form").find(".messages").html(k), a("#contact-form")[0].reset()) } }), !1 }));
    a(window).on("load", function () {
        a("#ctn-preloader").fadeOut();
        a("#preloader").delay(350).fadeOut("slow"); a("body").delay(350).css({ overflow: "visible" }); a("[data-aos]").length && AOS.init({ duration: 1E3, mirror: !0 }); var b = a(".fancybox"); b.length && b.fancybox({ arrows: !0, buttons: ["zoom", "slideShow", "thumbs", "close"], animationEffect: "zoom-in-out", transitionEffect: "zoom-in-out" }); a(".map-canvas").length && (b = new google.maps.Map(a(".map-canvas")[0], { zoom: 14, center: new google.maps.LatLng(40.72, -74), mapTypeId: google.maps.MapTypeId.ROADMAP, clickableIcons: !1 }), new google.maps.Marker({
            map: b,
            draggable: !0, position: new google.maps.LatLng(40.72, -74), visible: !0
        }))
    })
    $("#form-consultation").on("submit", function (e) {
        alert('hhhhhhhhhhh');
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var phone = $("#phone").val();

        $.ajax({
            url: "http://localhost:8000/phone-consultation",
            type: 'POST',
            data: { _token: _token, phone: phone },
            success: function (data) {
                if (data.success) {
                    $('#text-success').html(data.success)
                } else {
                    printErrorMsg(data.error);
                }
            },
            error: function () {
                console.log('error')
            }
        });
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            console.log(key);
            $('.' + key + '_err').text(value);
        });
    }

})(jQuery);


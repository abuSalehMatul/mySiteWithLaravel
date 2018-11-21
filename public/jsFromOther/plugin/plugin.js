/*global $, ProgressBar, state*/
$(document).ready(function () {
    "use strict";
    var $window = $(window),
        navbar = $(".nav-bar"),
        menu = $(".menu");
    //main nav
    $window.on("scroll", function () {
        if ($window.scrollTop() > 20) {
            navbar.addClass("background-style");
        } else {
            navbar.removeClass("background-style");
        }
    });
    //menu nav
    $(".nav-bar .menu-icon").on("click", function () {
        menu.toggleClass("active");
        $(".nav-bar .menu-icon").toggleClass("close-mark");
    });
    
    //owl carousel---> header
    $("header .owl-carousel").owlCarousel({
        loop : true,
        responsiveClass : true,
        animateOut : 'fadeOut',
        items : 1,
        nav : true,
        autoplay : true,
        autoplayTimeout : 8000,
        autoplayHoverPause : false
    });
    //owl ---> header next & prev option
    $("header .arrow .next").on("click", function () {
        $("header .owl-next").click();
    });
    $("header .arrow .prev").on("click", function () {
        $("header .owl-prev").click();
    });
    
    //progress bar ---> lines
    var lineBar = $(".skills .bar"),
        barCheck = false;
    
    function craetePro($id, $val) {
        var bar = new ProgressBar.Line($id, {
            strokeWidth: 2,
            easing: 'easeInOut',
            duration: 1400,
            color: '#e10a6f',
            trailColor: '#eee',
            trailWidth: 0.5,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '0px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
                bar.setText(Math.round(bar.value() * 100) + ' %');
          }
        });

        bar.animate($val);
    }
    
    function startProg() {
        if (!barCheck && $window.scrollTop() >= ($(".skills").offset().top - ($window.height() * 0.7))) {
            lineBar.each(function () {
                var val = $(this).data("value"),
                    id = "#" + $(this).attr("id");
                craetePro(id, val)
            });
            barCheck = true;
        }
    }
    startProg();
    $window.on("scroll", function () {
        startProg();
    });
    
    //progress bar ---> circles
    var cirBar = $(".skills .cir-bar"),
        cirCheack = false;
    function createCirc($cid, $cval) {
        var bar = new ProgressBar.Circle($cid, {
                color: '#aaa',
                strokeWidth: 4,
                trailWidth: 1,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: { color: '#aaa', width: 1 },
                to: { color: '#e10a6f', width: 4 },
                step: function (state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100) + "%";
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText(value);
                    }

                }
        });
        bar.text.style.fontSize = '2rem';

        bar.animate($cval);
    }
    
    function startCirc() {
        if (!cirCheack && $window.scrollTop() >= ($("#circles").offset().top - ($window.height() * 0.7))) {
            cirBar.each(function () {
                var cid = "#" + $(this).attr("id"),
                    cval = $(this).data("value");
                createCirc(cid, cval);
            });
            cirCheack = true;
        }
    }
    $window.on("scroll", function() {
        startCirc();
    });
    
    // portfolio list
    var selectClass = "",
        portList = $(".portfolio .port-list li"),
        portContainer = $(".portfolio ul.port-gallary"),
        portPart = $(".portfolio ul.port-gallary li");
    portList.on("click", function () {
        selectClass = $(this).data("rel");
        portPart.not("." + selectClass).fadeOut(500);
        portContainer.fadeOut(500);
        setTimeout(function () {
            portContainer.fadeIn(500);
            $("." + selectClass).fadeIn();
        }, 500);
        $(this).addClass("active").siblings().removeClass("active");
    });
    portPart.each(function () {
        $(this).hoverdir();
    });
    
    //popup 
    var $body = $("body"),
        viewPop = $(".portfolio i[data-view = 'view']"),
        popup =$(".popup"),
        popClose = $(".popup .pop-close"),
        popImg = $(".popup img");
    viewPop.on("click", function () {
        popup.fadeIn();
        var imgShow = $(this).parents(".port-card").find("img").attr("src");
        $(".popup img").attr("src", imgShow);
        $body.css("overflow", "hidden")
    });
    popClose.on("click", function () {
        popup.fadeOut();
        $body.css("overflow", "auto");
    });
    $(".popup .pop-next, .popup .pop-prev").on("click", function () {
        var getImg = $(this).parents(".popup").find("img").attr("src"),
            event = $(this).data("way");
        portPart.each(function () {
            var gallaryImg = $(this).find("img").attr("src");
            if (getImg === gallaryImg) {
                popImg.attr("src", $(this)[event]("li").find("img").attr("src"));
            }
        });
    });
    
    //counter
    var countUp = $(".count .timer"),
        countCheck = false;
    function startCount () {
        if (!countCheck && $window.scrollTop() >= ($(".count").offset().top - ($window.height() * 0.7))) {
            countUp.countTo();
            countCheck = true;
        }
    }
    $window.on("scroll", function () {
        startCount();
    });
    
    //owl carousel --> section previewss
    $(".previews .owl-carousel").owlCarousel({
        loop : true,
        responsiveClass : true,
        margin:30,
        responsive : {
            0 : {
                items : 1
            },
            768 : {
                items : 2
            },
            991 : {
                items : 3
            }
        },
        autoplay : true,
        autoplayTimeout : 5000,
        autoplayHoverPause : true
    });
    
    //owl carousel --> section previewss
    $(".supporters .owl-carousel").owlCarousel({
        loop : true,
        responsiveClass : true,
        responsive : {
            0 : {
                items : 1
            },
            768 : {
                items : 3
            },
            991 : {
                items : 5
            }
        },
        autoplay : true,
        autoplayTimeout : 5000,
        autoplayHoverPause : true
    });
    
    //form inputs
    var inputs = $(".contacts form input[data-area='type'], .contacts form textarea");
    inputs.on("focus", function () {
        $(this).css({
            "boxShadow": "none",
            "borderColor" : "#e10a6f",
            "backgroundColor": "transparent"
        });
    });
    inputs.on("blur", function () {
        $(this).css("borderColor", "#ddd");
    });
    //smooth scroll
    var scroll = new SmoothScroll('a[href*="#"]');
    
    //scroo top
    var scrollTop = $("a.scroll-top");
    $window.on("scroll", function () {
        if($window.scrollTop() > 200) {
            scrollTop.fadeIn();
        } else {
            scrollTop.fadeOut();
        }
    });

    //loading event
    $window.on("load", function () {
        $(".loading").slideUp(500, function () {
            $(this).remove();
        });
    });
});
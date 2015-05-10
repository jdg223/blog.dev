
function cascade() {
    var e = $("header").height();
    $("header").css({
        height: e + "px"
    }), isMobile.any() ? ($("header").removeClass("fixed"), $(".contentarea").removeClass("cascade-abs")) : $(".margin-top").css({
        "margin-top": e + "px"
    })
}
$(document).ready(function() {
    $(".fh").css({
        "min-height": window.innerHeight + "px"
    }), $(".fh").css({
        "min-height": window.innerHeight + "px"
    }), $("body").sideMenu(), $(".open_side").on("click", function() {
        $("#open_menu").trigger("click")
    }), $("body").on("keydown", function(e) {
        38 == e.keyCode ? $("#prevpage").trigger("click") : 40 == e.keyCode ? $("#nextpage").trigger("click") : 37 == e.keyCode ? $("#prevpage").trigger("click") : 39 == e.keyCode && $("#nextpage").trigger("click")
    }), $(".pt-page").swipe({
        swipe: function(e, i) {
            "right" == i ? $("#prevpage").trigger("click") : "left" == i && $("#nextpage").trigger("click")
        }
    }), cascade(), $(".owl-carousel").owlCarousel({
        items: 1
    }), checkPosition($(".cd-image-container")), $(".cd-image-container").each(function() {
        var e = $(this);
        drags(e.find(".cd-handle"), e.find(".cd-resize-img"), e, e.find('.cd-image-label[data-type="original"]'), e.find('.cd-image-label[data-type="modified"]'))
    }), $(".typed").appear()
});
var home_pageVideo_url = '<iframe src="https://player.vimeo.com/video/89527215?title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
$("#playVid").on("click", function() {
    $("#home_pageVideo_iframe").append(home_pageVideo_url), $(".videolightbox").css({
        display: "block"
    })
}), $(".closelightbox").click(function() {
    $("#home_pageVideo_iframe").empty(), $(".videolightbox").css({
        display: "none"
    })
}), $(document.body).on("appear", ".typed", function() {
    $(".typed").typed({
        strings: ["Never compromise user trust for user growth.^200", " Survival is a growth strategy ^200", "Ignore luck. Just work really hard. ^200", "Data beats emotions.^200", "Try it out!"],
        typeSpeed: 5,
        backDelay: 5e3,
        loop: !0,
        loopCount: !1,
        showCursor: !1
    })
}), $(document).on("scroll", function() {
    var e = $(this).scrollTop();
    $(".top-nav").css(100 > e ? {
        top: "0px"
    } : {
        top: "-100px"
    }), checkPosition($(".cd-image-container"))
}), $(".control-btn").on("click", function(e) {
    e.preventDefault();
    var i = ".contentarea";
    $("html, body").animate({
        scrollTop: $(i).offset().top
    }, 600)
});
var ctx = "",
    vtx = "";
$(".filter-nav li").on("click", function() {
    var e = 0;
    ctx = $(this).attr("data-type").toLowerCase(), "all" == ctx ? ($("#grid li").removeClass("op00"), $("#grid li").removeClass("op01")) : $("#grid li").each(function() {
        vtx = $(this).attr("data-type"), ctx == vtx ? ($(this).removeClass("op00"), $(this).removeClass("op01"), $(this).addClass("op01"), e += 1) : ($(this).removeClass("op00"), $(this).removeClass("op01"), $(this).addClass("op00"))
    }), $(this).addClass("active"), $(this).siblings().removeClass("active"), $(".active sup").text(e)
});

Pace.on('done', function() {
    new WOW().init();
});

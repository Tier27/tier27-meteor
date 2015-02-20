$.fn.textWidth = function(){
	var text = $(this).html();
	$(this).html('<span>'+text+'</span>');
	var width = $(this).find('span:first').width();
	$(this).html(text);
	return width;
};

$(document).ready(function() {

	for(var i=0, len = $('.team-member').length; i < len; i+=2) {
		$('.team-member').slice(i, i+2).wrapAll('<li><div class="row">');
	}


	$(".nav-toggle").click(function() {
	    $(this).toggleClass("active");
	    $(".overlay-nav").toggleClass("open")
	});
	$(".overlay ul li a").click(function() {
	    $(".nav-toggle").toggleClass("active");
	    $(".overlay-nav").toggleClass("open")
	});
	$(".overlay").click(function() {
	    $(".nav-toggle").toggleClass("active");
	    $(".overlay-nav").toggleClass("open")
	});
	$("a[href*=#]:not([href=#])").click(function() {
	    if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
	        var e = $(this.hash);
	        e = e.length ? e : $("[name=" + this.hash.slice(1) + "]");
	        if (e.length) {
	            $("html,body").animate({
	                scrollTop: e.offset().top
	            }, 1e3);
	            return false
	        }
	    }
	})

    $(".wp1").waypoint(function() {
        $(".wp1").addClass("animated fadeInLeft")
    }, {
        offset: "75%"
    });
    $(".wp2").waypoint(function() {
        $(".wp2").addClass("animated fadeInDown")
    }, {
        offset: "75%"
    });
    $(".wp3").waypoint(function() {
        $(".wp3").addClass("animated fadeInRight")
    }, {
        offset: "75%"
    });
    $(".wp4").waypoint(function() {
        $(".wp4").addClass("animated fadeInDown")
    }, {
        offset: "75%"
    });
    $(".wp5").waypoint(function() {
        $(".wp5").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });
    $("#teamSlider").flickity({
        cellAlign: "left",
        contain: true,
        prevNextButtons: true,
        autoPlay: true
    });

});

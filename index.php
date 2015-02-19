<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'head.php' ?>
  <title>Tier 27</title>
<!-- Page Specific CSS -->
<link href="css/flickity.css" rel="stylesheet">
</head>
<body>
  
<?php include("header.php"); ?>
   
<!--main content start-->
<section id="actions" class="homepage-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="action">                           
                    <div class="icon">
                        <div class="image rocket"><i class="fa fa-rocket fa-pulse"></i></div>
                        <h3>Application Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div> <!--/.action-->
            </div>
            <div class="col-sm-4">
                <div class="action">                           
                    <div class="icon">
                        <div class="image cogs"><i class="fa fa-cogs fa-spin"></i></div>
                        <h3>API Construction</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div> <!--/.action-->
            </div>
            <div class="col-sm-4">
                <div class="action">                           
                    <div class="icon">
                        <div class="image cubes"><i class="fa fa-cubes fa-pulse"></i></div>
                        <h3>Startup Consulting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div> <!--/.action-->     
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</section>

<section id="team">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="team-slider">
                    <ul class="slides" id="teamSlider">
                        <li>
                        	<div class="row">
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/josh.jpg" alt="Josh">
                        			<h4>Joshua Kornreich</h4>
                        			<span>Founder &amp; Developer</span>
                        			<p>I am a problem solver.  I like to help people build their dreams.</p>
                        		</div>
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/ryan.jpg" alt="Ryan">
                        			<h4>Ryan Douvlos</h4>
                        			<span>Founder &amp; Designer</span>
                        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        		</div>
                        	</div> <!--/.row-->
                        </li>
                        <li>
                        	<div class="row">
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/matt.png" alt="Matt">
                        			<h4>Matt Getz</h4>
                        			<span>Database Architect</span>
                        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        		</div>
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/dylan.png" alt="Dylan">
                        			<h4>Dylan Moore</h4>
                        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        		</div>
                        	</div> <!--/.row-->
                        </li>
                        <li>
                        	<div class="row">
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/omar.png" alt="Omar">
                        			<h4>Omar Jatoi</h4>
                        			<span>System Administrator</span>
                        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        		</div>
                        		<div class="col-xs-12 col-sm-6">
                        			<img src="img/keith.png" alt="Keith">
                        			<h4>Keith Williams</h4>
                        			<span>Full-Stack Engineer</span>
                        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        		</div>
                        	</div> <!--/.row-->
                        </li>
                    </ul>
                </div>
	        </div>
	    </div> <!--/.row-->
	</div> <!--/.container-->
</section>

<section id="projects" class="homepage-section">
	<div class="container">
	    <div class="row">
	        <div class="col-sm-8 col-md-6">
	            <img class="img-responsive" src="img/lms.png" alt="LMS">
	        </div>
	        <div class="col-sm-12 col-md-6">
	        	<h1>LMS</h1>
	        	<h4>Lorem ipsum dolor sit amet</h4>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	        	<a class="theme-color-btn">Read More</a>
	        </div>
	    </div> <!--/.row-->
	</div> <!--/.container-->
</section>

<!--main content end-->

<?php include("footer.php"); ?>

<!-- Nav Script -->
<script>
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
</script>

<script>
$(document).ready(function() {
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
</script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/waypoints.min.js"></script>

</body>
</html>
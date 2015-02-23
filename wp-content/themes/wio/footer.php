<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
				<img src="/wio/wp-content/themes/wio/img/logo.png" alt="duckhunt">
                <div class="foot-social">
                    <a href="https://www.facebook.com/WildInstinctOutdoors"><i class="fa fa-facebook-square"></i></a>
                    <a href="http://instagram.com/wildinstinctoutdoors"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="footer-nav">
                    <?php 
                        if(has_nav_menu('footer')) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer',
                                'menu' => 'Primary Menu',
                                'container_class' => 'foot-nav',
                                'menu_class' => 'foot',
                                'walker' => new wp_bootstrap_navwalker()
                                ));
                        }
                        else {
                            echo '<li><a href="#">No menu assigned!</a></li>';
                        }
                    ?>  
                </div>
				<cite>© 2015 Wild Instinct Outdoors™   |   Site designed & developed by <a target="_blank" href="http://joeharrity.com">Joe Harrity</a></cite>
			</div>	
		</div>
	</div>
</footer><!-- close #colophon -->



</div><!-- wrap -->
</div><!-- close .main-content -->


<?php wp_footer(); ?>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="wp-content/themes/wio/js/fittext.js"></script>

<script>
  jQuery("#production-fit").fitText();
  jQuery("#sponsor-fit").fitText();
  jQuery(".content-title").fitText();
  jQuery(".product_title").fitText();
</script>
<script>

        // SETS ALL THESE SECTIONS TO BE THE EXACT HEIGHT OF VIEWPORT
        $(document).ready(function () {

            /*Set height of sections to window height*/
            $("#jumbotron").each(function () {
                var $this = $(this);
                $this.css({ 'min-height': ($(window).height()) + 'px' });

                /*Recalculate on window resize*/
                $(window).resize(function () {
                    $this.css({ 'min-height': ($(window).height()) + 'px' });
                });
            });



            /*Set height of sections to window height*/
            $(".featured-image").each(function () {
                var $this = $(this);
                $this.css({ 'min-height': ($(window).height()) + 'px' });

                /*Recalculate on window resize*/
                $(window).resize(function () {
                    $this.css({ 'min-height': ($(window).height()) + 'px' });
                });
            });


        });



</script>



<script>
		console.log("testing work");

	$(".wrap").click(function () {
	    $("body").removeClass('menu-open');
	    removeClass = false;
	});

	$(".menu-link").click(function () {
	    $("body").toggleClass('menu-open');
	    removeClass = false;
	});

	$(".menu-close").click(function () {
	    $("body").removeClass('menu-open');
	    removeClass = false;
	});
</script>



<script>
	
    $(window).scroll(function() {    
        var header = $(".navi");
        var scroll = $(window).scrollTop();
    
        if (scroll >= 100) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });

     // $(".single-featured:odd").addClass("even");

</script>


  <script>
// HOMEPAGE HERO VIDEO

$('.play').click(function(){
        $('body').prepend('<div class="movie_popupWrapper" id="hero-video-id"><div class="movie_popup"><img src="/wp-content/themes/wio/img/exit.png" alt="exit" data-dismiss="modal" class="exit"><iframe src="//player.vimeo.com/video/117238565?title=0&amp;byline=0&amp;portrait=0&amp;color=69c0af&amp;autoplay=1" width="100%" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>');
        $('.movie_popupWrapper').fadeIn();
        $('body').css('overflow','hidden');
        $('video')[0].pause();
    });

    $(document).on('click', '.movie_popupWrapper', function(){
        cancelPopup();
    });

    $(".exit").on('click', '.movie_popupWrapper', function(){
        cancelPopup();
    });

    function cancelPopup(){

    $('.play').fadeIn();
    $('#loginWrapper, .movie_popupWrapper').fadeOut();
    $('body').css('overflow','');

    setTimeout(function(){
        $('.movie_popupWrapper').remove();

    }, 500);

}

    // ESC to dismiss
    $(window.document).bind('keydown.esc', function(e) {
        console.log('keydown');
        if (e.which == 27) {
            console.log('ESC');
            cancelPopup();
        }
    });


    $(document).ready(function(){
      $(".movie_popupWrapper").fitVids();
    });

</script>





</body>
</html>
<?php
/*
Template Name: Homepage
*/

?>

<?php get_header (); ?>



	<?php $page = get_page_by_title ( 'Homepage' ); ?>
		<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>



	<div class="hero-full clearfix" id="jumbotron" style="background: url('<?php echo $background[0]; ?>') no-repeat;">		
	
	<?php endif; ?>
	
		<div class="hero-block">
			<div class="container hero-content">
				<div class="cta-image animated fadeInUp">
					<img src="<?php the_field('cta'); ?>" />
				</div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<div class="hero-minor animated fadeInUp">
					<?php the_content(); ?>
					<!-- <a id="vid-btn" href="#video">Watch Video</a> -->
			      <div class="play">
			        <img src="wp-content/themes/wio/img/play.png" alt="play">
			        <span>Play Video</span>
			      </div>
				</div>
				<?php endwhile; endif; ?> 
				
					
			</div>
		</div><!-- hero-block -->
	</div><!-- hero-full -->
	
	

	<div class="section2">
		<div class="coming-soon" style="background-image: url('<?php the_field('coming_soon_background'); ?>');">
			<div class="coming-soon-content container" data-center="opacity: 1;bottom:0px" data-bottom="opacity: 0;bottom:-50px">
				<?php the_field('coming_soon'); ?>
			</div>
		</div>
	</div>


	<div class="section3 clearfix" id="">
		<div class="featured-block clearfix">

			<?php
		        $args = array( 
		          'post_type' => 'alternating-blocks'
		        );
		        $the_query = new WP_Query( $args );
		    ?>

		    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="single-featured">
<!-- 					<div class="col-sm-6 featured-content" data-center="opacity: 1;bottom:0px" data-bottom="opacity: 0;bottom:-75px">
						
							<img src="wp-content/themes/wio/img/slash.png" alt="coming soon">		
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						
					</div> -->
					<div class="col-sm-6 featured-image" style="background-image: url('<?php the_field('image'); ?>'); background-size: cover;">
						<div class="featured-content">
							<img src="wp-content/themes/wio/img/slash.png" alt="coming soon">		
								<h2 class="content-title"><?php the_title(); ?></h2>
								<p class="content-para"><?php the_content(); ?></p>
							</div>
					</div>
				</div>

			<?php endwhile; endif; ?>

		</div>
	</div>



	<div class="section4 clearfix" id="production">
		<div class="production-intro">
			<h1 id="production-fit">Production</h1>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class="product-red" style="background-image: url('<?php the_field('landing_production_background'); ?>');">
				<div class="production-content">
					<?php the_field('production_intro'); ?>
				</div>
			
		<?php endwhile; endif; ?> 
		</div>
	</div>



	<div class="section5 clearfix sponsors" id="">
		<div class="sponsor-intro">
			<h1 id="sponsor-fit">Sponsors</h1>
		</div>
		<div class="sponsors-group">

				<?php
			        $args = array( 
			          'post_type' => 'sponsor'
			        );
			        $the_query = new WP_Query( $args );
			    ?>

   				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-xs-4 single-sponsor">
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>

		</div>
		<a href="#">View Sponsors</a>
	</div>

<!-- 	<div class="video">
		<video muted autoplay="" loop="" id="backgroundVideo" class="supervideo testVideo">
			<source src="wp-content/themes/wio/img/wio1.mp4.mp4" type="video/mp4">
			<source src="wp-content/themes/wio/img/wio1.webmhd.webm" type="video/webm">
		</video>
	</div>
 -->
	<div class="section6 clearfix">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class="contact">
			<div class="contact-content">
				
				<?php the_field('contact_us'); ?>
				<?php endwhile; endif; ?> 
				<a href="https://www.facebook.com/WildInstinctOutdoors"><i class="icono-facebook"></i></a>
				<a href="http://instagram.com/wildinstinctoutdoors"><i class="icono-instagram"></i></a>
				<div class="contact-button">
					<a href="#">Contact Us</a>
				</div>
			</div>
		</div>
	</div>

<!-- 	<div class="section7 clearfix">
		<div class="container">
			<div class="col-sm-6 form">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>		

					<?php the_field('contact_form'); ?>		
				<?php endwhile; endif; ?> 
			</div>

			<div class="col-sm-6 insta">
				<?php the_field('instagram'); ?>				
			</div>
		</div>
		
	</div> -->
<!-- 
<div id="videoContainer">
	<video autoplay="" loop="" id="backgroundVideo" class="supervideo testVideo">
		<source src="wp-content/themes/wio/img/wio1.webmhd.webm" type="video/webm">
		<source src="wp-content/themes/wio/img/wio1.mp4.mp4" type="video/mp4">
	</video>
</div> -->







<!-- <img src="wp-content/themes/wio/img/footer-bg.png" alt="play"> -->

<?php get_footer (); ?>
<?php
/*
Template Name: About Us
*/

?>

<?php get_header (); ?>



	<?php $page = get_page_by_title ( 'About Us' ); ?>
		<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>



	<div class="hero-inner clearfix" style="background: url('<?php echo $background[0]; ?>') no-repeat;">		
	
	<?php endif; ?>
	

	</div><!-- hero-full -->
	
<div class="section">
		<h1>this is about page</h1>
	</div>













<?php get_footer (); ?>
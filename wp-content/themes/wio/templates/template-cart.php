<?php
/*
Template Name: Cart
*/

?>

<?php get_header (); ?>


 	<?php $page = get_page_by_title ( 'Cart' ); ?>
		<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>



	<div class="hero-inner clearfix" style="background: url('<?php echo $background[0]; ?>') no-repeat;">		
	
	<?php endif; ?>
	

	</div><!-- hero-full -->


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>		
		<?php the_content(); ?>				
	<?php endwhile; endif; ?> 





<?php get_footer (); ?>
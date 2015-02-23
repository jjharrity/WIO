<?php
/*
Template Name: Stickers
*/

?>

<?php get_header (); ?>

 	<?php $page = get_page_by_title ( 'Stickers' ); ?>
		<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>



	<div class="hero-inner clearfix" style="background: url('<?php echo $background[0]; ?>') no-repeat;">		
	
	<?php endif; ?>
	
		<?php the_title( ); ?>
	</div><!-- hero-full -->



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
		
		<?php the_content(); ?>

	
		

	<?php endwhile; endif; ?> 





<?php get_footer (); ?>
<?php
/*
Template Name: Gallery
*/

?>

<?php get_header (); ?>



	<?php $page = get_page_by_title ( 'Gallery' ); ?>
		<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>



	<div class="hero-inner clearfix" style="background: url('<?php echo $background[0]; ?>') no-repeat;">		
	
	<?php endif; ?>
	

	</div><!-- hero-full -->
	
	
		


			<div class="production-image-group">
					<?php
				        $args = array( 
				          'post_type' => 'production-images'
				        );
				        $the_query = new WP_Query( $args );
				    ?>

				    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


				<div class="col-sm-6 col-md-4 single-prod-image" style="background-image: url('<?php the_field('production_background'); ?>');">
					<div class="modal-wrap" data-toggle="modal" data-target="#myModal-<? the_ID(); ?>">
					<div class="product-content">
						<!-- <h3><?php the_title(); ?></h3> -->
						<!-- <span>View Larger</span> -->
						<i class="fa fa-picture-o"></i>
					</div>
					</div>
				</div>




				<div class="modal fade" id="myModal-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-body">
				        				     
							<img src="<?php the_field('production_image'); ?>" />

				      </div>
				    </div>
				  </div>
				</div>
			<?php endwhile; endif; ?>
		</div>















<?php get_footer (); ?>
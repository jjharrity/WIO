<?php
/*
Template Name: Shop
*/

?>

<?php get_header ('inner'); ?>




	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
		

		<!-- <h1>oisjds</h1> -->
	

	
		

	<?php endwhile; endif; ?> 





<?php get_footer (); ?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<!-- fonts -->
<script src="//use.typekit.net/aui4skz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
    

<link href="wp-content/themes/wio/css/animate.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	


<nav role="navigation">
	<div class="navWrap">
		<h2 class="menu-close"></h2>

			<?php 
                if(has_nav_menu('primary')) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu' => 'Primary Menu',
						'container_class' => 'slide-nav',
						'menu_class' => 'slide-nav-menu',
						'menu_id' => 'main-menu',
						'walker' => new wp_bootstrap_navwalker()
						));
                }
                else {
					echo '<li><a href="#">No menu assigned!</a></li>';
                }
            ?>	

	</div>
</nav>


<div class="main-content">
	<!-- <img src="wp-content/themes/wio/img/grundge-border.png" alt="border" class="border"> -->
	<div class="navi inner">
		<div class="container">
			<header role="banner">


				<a href="<?php echo home_url(); ?>" title="Logo" class="logo animated fadeIn"></a>
				<div class="menu-link">
					<img src="wp-content/themes/wio/img/scope.png" alt="scope" class="scope">
					<h3>Menu</h3>
				</div>

			</header>
		</div>
	</div>

	<div class="wrap">


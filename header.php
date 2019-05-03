<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Panda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="frame">
	<div class="frame__social">
		<a href="https://github.com/jennylu0" target="_blank"><i class="fab fa-fw fa-github"></i></a>
		<a href="https://www.linkedin.com/in/jennifer-lu0/" target="_blank"><i class="fab fa-fw fa-linkedin"></i></a>
		<a href="mailto:jennyluo.jyl@gmail.com" target="_blank"><i class="fas fa-fw fa-envelope-open-text"></i></a>
	</div>

	<div class="frame__info">
		<div class="frame__info--icon">
			<a href="/">
				<svg id="Layer_6" data-name="Layer 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.7 81.03"><path class="cls-1" d="M84.29,65.32a14.17,14.17,0,0,1,3,9.07c0,10-9,13-14,13h0c-11,0-17-10-26-13-7.59-2.53-14,0-14,6,0,5,5,7.56,9,7,7-1,8.49-8.61,10.92-17.86,3.58-13.64,7.16-33,14.08-37.14,10-6,20,2,20,11,0,11-8,15-14,15-4,0-9.58-2-14.54-4.17-6.21-2.74-12.41-4.8-18.62-7.54-5-2.2-10.54-4.17-14.54-4.17-6,0-14,4-14,15,0,9,10,17,20,11C38.51,64.36,42.1,45,45.68,31.37c2.43-9.25,3.92-16.86,10.92-17.86,4-.57,9,2,9,7,0,6-6.41,8.53-14,6-9-3-15-13-26-13-5,0-14,3-14,13a14.17,14.17,0,0,0,3,9.07" transform="translate(-8.1 -9.93)"/></svg>
			</a>
			<label for="mobilemenu"><i class="fas fa-bars"></i></label>
			<input type="checkbox" id="mobilemenu" class="d-sm-none d-block">

			<nav id="site-navigation-mobile" class="main-navigation main-navigation-mobile frame--header d-block d-sm-none">

				<?php esc_html_e( '', 'panda' ); ?>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>

				<!-- <span class="frame__top"></span>  -->

			</nav><!-- #site-navigation -->

		</div>
			


		<!--
		--><!-- <div class="frame__info--content border--reg">
			 <?php /* get_sidebar(); */ ?> 
		</div> --> <!-- HIDE INFO POP UP -->
	</div>

	<span class="frame__top"></span>
	<span class="frame__right"></span>
	<span class="frame__bottom"></span>
	<span class="frame__left"></span>
</div>

<!-- CONTACT US MODAL -->

<div class="modal fade hire-me" id="hireme" tabindex="-1" role="dialog" aria-labelledby="hireme" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Hire me</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div class="contact-item">
      		<div class="contact-icon">
      			<i class="far fa-envelope"></i>
      		</div>
      		<div class="contact-link">
      			<a href="mailto:jennyluo.jyl@gmail.com">jennyluo.jyl@gmail.com</a>
      		</div>
      	</div>

      	<div class="contact-item">
      		<div class="contact-icon">
      			<i class="fab fa-linkedin-in"></i>
      		</div>
      		<div class="contact-link">
      			<a href="https://www.linkedin.com/in/jennifer-lu0/" target="_blank">Jennifer Luo</a>
      		</div>
      	</div>

      	<div class="contact-item">
      		<div class="contact-icon">
      			<i class="fab fa-github"></i>
      		</div>
      		<div class="contact-link">
      			<a href="https://github.com/jennylu0" target="_blank">Jennylu0</a>
      		</div>
      	</div>

      </div>
    </div>
  </div>
</div>

<!-- END CONTACT US MODAL -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'panda' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$panda_description = get_bloginfo( 'description', 'display' );
			if ( $panda_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $panda_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div> --><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation frame--header">

			<?php esc_html_e( 'Primary Menu', 'panda' ); ?>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

			<!-- <span class="frame__top"></span>  -->

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

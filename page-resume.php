<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Panda
 */

get_header();
?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<div class="container">
		<?php
		while ( have_posts() ) :
			the_post(); 

			if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'panda' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

		<?php endwhile; // End of the loop.
		?>

		<!-- START RESUME -->
		<div class="resume-wrapper">
		<div class="resume">
		<div class="resume__header">
			<div class="resume__header--logo d-none d-md-block">
				<img src="https://placehold.it/100x100">
			</div>
			<div class="resume__header--name text-right">
				Jenny<span>Luo</span>
				<div class="resume__header--title">
				Front-End Web Developer
			</div>
			</div>

			<div class="resume__header--desc">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>	
		</div>

		<div class="resume__info">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-envelope"></i></span>Email address</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-desktop"></i></span>Website link</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-phone"></i></span>Phone</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-map-marker-alt"></i></span>Physical address</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row m-0">
			<div class="col-md-9 col-sm-12 resume__body-left">
				<div class="resume__title"><span>Experience</span></div>
				
				<div class="resume-item">
					<div class="resume-item__header">
						<span class="resume-item__title">
							Longer title here
						</span>
						<span class="resume-item__date">
							20xx-20xx
						</span>
						<div class="resume-item__desc">
							<span>Title here</span>
						</div>
					</div>

					<div class="resume-item__body">
						<ul class="list-custom">
							<li>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</li>
							<li>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </li>
							<li>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </li>
							<li>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </li>
						</ul>
					</div>
				</div>
				
			</div>

			<div class="col-md-3 col-sm-12 resume__body-right">
				
				<div class="row">
					<div class="right--top col-sm-12">
						<div class="resume__title d-block d-md-none"><span>Info</span></div>
						<ul class="fa-ul">
							<li><span class="fa-li" ><i class="fas fa-graduation-cap"></i></span>Education</li>
							<li><span class="fa-li" ><i class="fas fa-language"></i></span>Languages</li>
						</ul>
					</div>

					<div class="right--middle col-sm-12 text-center">
						<div class="resume__title"><span>Skills</span></div>
						<ul class="list-none text-center">
							<li>List item 1</li>
							<li>List item 2</li>
							<li>kill me</li>
						</ul>
					</div>

					<div class="right--bottom col-sm-12">
						<div class="resume__title"><span>Interests</span></div>

						<div class="row">
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
							<div class="col-sm-4 col-4">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Name here
								</div>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>

	</div> <!-- .resume -->
</div> <!-- .resume-wrapper -->
	<!-- END RESUME -->


			</div> <!-- #container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

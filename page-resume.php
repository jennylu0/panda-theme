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
				<p>Creative front-end developer with an eye for design and a passion for developing cutting-edge web solutions that are not only functional, but beautiful as well. Capable of massive multitasking, untangling spaghetti code, and using digital black magic to translate a flat design into a viable web solution. </p>
			</div>	
		</div>

		<div class="resume__info">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-envelope"></i></span>Jennyluo.jyl@gmail.com</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-desktop"></i></span>Jennyluo.com</li>
					</ul>
				</div>
				<!-- <div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-phone"></i></span>000-000-0000</li>
					</ul>
				</div> -->
				<div class="col-md-3 col-sm-6 col-xs-12 mb-md-0 mb-2">
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="fas fa-map-marker-alt"></i></span>Chicago, IL</li>
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
							Slack and Company
						</span>
						<span class="resume-item__date">
							2017-Present
						</span>
						<div class="resume-item__desc">
							<span>Front-End Web Developer, Digital Strategist</span>
						</div>
					</div>

					<div class="resume-item__body">
						<ul class="list-custom">
							<li>Worked closely with designers and copywriters to create graceful web solutions that fit the client’s needs</li>
							<li>Managed and developed many high priority digital projects with completing deadlines as digital lead and developer </li>
							<li>Acted as a liaison between Slack and Company and client IT departments, as well as third party digital vendors, to facilitate technical communications</li>
							<li>Adapted to and learned many new web technologies required on projects rapidly and accurately </li>
							<li>Implemented modern processes to improve internal workflows and adhere to best practices, replacing previously inefficient, outdated practices </li>

						</ul>
					</div>
				</div>

				<div class="resume-item">
					<div class="resume-item__header">
						<span class="resume-item__title">
							University of Oregon, AEI
						</span>
						<span class="resume-item__date">
							2016-2017
						</span>
						<div class="resume-item__desc">
							<span>Multimedia production specialist </span>
						</div>
					</div>

					<div class="resume-item__body">
						<ul class="list-custom">
							<li>Pioneered a complete brand overhaul, including a website, of the department in order to comply with new University Global Marketing standards </li>
							<li>Launched print and email campaigns to improve enrollment and student retention </li>
							<li>Met regularly with other department designers and global Marcom to facilitate brand centralization of the UO brand for a modern, united look</li>

						</ul>
					</div>
				</div>

				<div class="resume-item">
					<div class="resume-item__header">
						<span class="resume-item__title">
							University of Oregon, EMU
						</span>
						<span class="resume-item__date">
							2014-2016
						</span>
						<div class="resume-item__desc">
							<span>Designer & Front-end web developer </span>
						</div>
					</div>

					<div class="resume-item__body">
						<ul class="list-custom">
							<li>Developed Wordpress websites to be maintainable by nontechnical staff and scalable for annual themed reskins </li>
							<li>Facilitated communication between student union organizations and designers to create effective, cohesive promotional content</li>
							<li>Launched print, web, and social media campaigns to promote the renovation of the student union building</li>

						</ul>
					</div>
				</div>
				
			</div>

			<div class="col-md-3 col-sm-12 resume__body-right">
				
				<div class="row">
					<div class="right--top col-sm-12">
						<div class="resume__title d-block d-md-none"><span>Info</span></div>
						<ul class="fa-ul">
							<li><span class="fa-li" ><i class="fas fa-graduation-cap"></i></span>University of Oregon, Eugene, OR 2015<br>
Bachelor of Science, Major in Digital Arts, Minor in Computer Information Technology 
</li>
							<li><span class="fa-li" ><i class="fas fa-language"></i></span>EN/CN</li>
						</ul>
					</div>

					<div class="right--middle col-sm-12 text-center">
						<div class="resume__title"><span>Skills</span></div>
						<ul class="list-none text-center">
							<li>HTML/CSS</li>
							<li>JavaScript</li>
							<li>jQuery</li>
							<li>Bootstrap 3 & 4</li>

							<li>DNN 9</li>
							<li>Wordpress</li>
							<li>Drupal 7</li>
							<li>Kentico</li>

							<li>Pardot</li>
							<li>Eloqua</li>

							<li>Adobe creative suite </li>
							<li>Microsoft suite </li>
							<li>Sketch</li>
							<li>Adobe XD</li>

						</ul>
					</div>

					<div class="right--bottom col-sm-12">
						<div class="resume__title"><span>Interests</span></div>

						<div class="row">
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Art
								</div>
							</div>
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Comics
								</div>
							</div>
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									EDM
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Sewing
								</div>
							</div>
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Fashion
								</div>
							</div>
							<div class="col-sm-4 col-4 interest-item">
								<div class="interests__img mb-2 mt-2">
									<img src="https://placehold.it/100x100" class="img-fluid">
								</div>
								<div class="interests__name d-none d-lg-block text-center">
									Fitness
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

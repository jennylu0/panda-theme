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

			<div class="container about">
					<div class="row align-items-center about">
						<div class="col-12 col-lg-6">
							<!-- <div class="about-left"> -->
								<div class="about-title">Profile</div>
								<div class="about-body">
									<div class="about-body__stats d-flex justify-content-between align-items-center">
										<div class="stats-img"><img src="https://placehold.it/200x300" class="img-fluid"></div>
										<div class="stats-stats">
											<div class="stats-wrapper">
												<span class="stats-label">Name:</span> Jenny
											Luo
											</div>
											<div class="stats-wrapper">
												<span class="stats-label">LVL:</span> 24
											</div>
											<div class="stats-wrapper">
												<div class="stats-label hp">HP:</div>
												<div class="stats-hp"></div>
											</div>
											<div class="stats-wrapper">
												<div class="stats-label mp">MP:</div>
												<div class="stats-mp"></div>
										</div>

											<div class="stats-wrapper">
												<span class="stats-item">
													<span class="stats-label">Atk:</span> 00
												</span>
												<span class="stats-item">
													<span class="stats-label">Int:</span> 00
												</span>
												<span class="stats-item">
													<span class="stats-label">Def:</span> 00
												</span>
												<span class="stats-item">
													<span class="stats-label">Stg:</span> 00
												</span>
												<span class="stats-item">
													<span class="stats-label">Spd:</span> 00
												</span>
												<span class="stats-item">
													<span class="stats-label">Mgc:</span> 00
												</span>
											</div>
										</div>
									</div>
									<div class="about-body__interest">
										<div class="interests-title">Interests</div>
										<div class="interests-item-container">
											<div class="interests-item">
												<div class="interests-icon">	
													<img src="https://placehold.it/100x100" class="img-fluid">
												</div>
												<div class="interests-label">
													Label
												</div>
											</div>
											<div class="interests-item">
												<div class="interests-icon">	
													<img src="https://placehold.it/100x100" class="img-fluid">
												</div>
												<div class="interests-label">
													Label
												</div>
											</div>
											<div class="interests-item">
												<div class="interests-icon">	
													<img src="https://placehold.it/100x100" class="img-fluid">
												</div>
												<div class="interests-label">
													Label
												</div>
											</div>
											<div class="interests-item">
												<div class="interests-icon">	
													<img src="https://placehold.it/100x100" class="img-fluid">
												</div>
												<div class="interests-label">
													Label
												</div>
											</div>
											<div class="interests-item">
												<div class="interests-icon">	
													<img src="https://placehold.it/100x100" class="img-fluid">
												</div>
												<div class="interests-label">
													Label
												</div>
											</div>
										</div>
									</div>
								</div>
							<!-- </div> -->
						</div>

						<div class="col-12 col-lg-6 about-bio-container">
							<div class="about-bio">

								<?php
									while ( have_posts() ) :
										the_post();

										get_template_part( 'template-parts/content', 'page' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;


									endwhile; // End of the loop.
									?>


							</div>
						</div>
					</div>

			</div> <!-- #container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

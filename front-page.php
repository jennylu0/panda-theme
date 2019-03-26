<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

			<div class="row">
				<div class="col-md-4 col-sm-12 main-info__container">

					<?php 
					get_sidebar();
					?> 

				</div>

				<div class="col-md-8 col-sm-12">

					<!-- Only show content from the home page with ID 240 -->
			<?php
			$query = new WP_Query( array( 'page_id' => 240 ) );
			?>

			<?php if ( $query->have_posts() ) : ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php while ($query->have_posts()) : $query->the_post(); ?>

						<!--<h1 class="entry-title"><?php /*the_title();*/ ?></h1>--> <!-- Queried Post Title -->
						<div class="entry-content">
							<?php the_content(); ?> <!-- Queried Post Excerpts -->
						</div><!-- .entry-content -->

					<?php endwhile; //resetting the post loop ?>
				</div>
				<?php
        wp_reset_postdata(); //resetting the post query
    endif;
    ?>

				</div>

    	</div>

		</div> <!-- #container -->
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

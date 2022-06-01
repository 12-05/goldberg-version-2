
   
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="goldberg-news-wrapper" id="index-wrapper">

	<div class="news-container wrapped" id="content" tabindex="-1">
    

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'inc/templates/single');
					}
				} else {
				}
				?>

			</main><!-- #main -->
            

            <div class="sidebar">
                <?php dynamic_sidebar('goldsidebar');?>
            </div>
			<!-- The pagination component -->

			<!-- Do the right sidebar check -->


	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
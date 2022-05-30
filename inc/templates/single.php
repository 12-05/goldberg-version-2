<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('wrapped goldberg-post'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
    <?php if ( 'post' === get_post_type() ) : ?>

            <div class="entry-meta">
				<?php echo get_the_date('d.m.Y'); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>


	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php
		the_content();
		?>
        

	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php 
            // make next and previous post navigation
            the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Vorheriger Beitrag'),
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Nächster Beitrag'),
            ) );?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
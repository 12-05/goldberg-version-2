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
		the_excerpt();
		?>
        <a  class="article-link" href="<?php echo get_permalink();?>">Mehr erfahren <?php 
        // draw a svg arrow to the right
        echo '<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>';
        ?>
        </a>

	</div><!-- .entry-content -->

	<footer class="entry-footer">


	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
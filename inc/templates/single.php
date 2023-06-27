<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(' goldberg-post');?> id="post-<?php the_ID();?>">

	<header class="entry-header">

	<!-- check if post thumbnail exists and render it -->
	<?php if (has_post_thumbnail()): ?>
		<a href="<?php echo get_permalink(); ?>" class="post-thumbnail">

			<?php the_post_thumbnail('large', ['class' => 'img-fluid']);?>

		</a>
	<?php endif;?>

    <?php if ('post' === get_post_type()): ?>

            <div class="entry-meta">
				<?php echo get_the_date('d.m.Y'); ?>
			</div><!-- .entry-meta -->

		<?php endif;?>

		<?php
the_title(
    sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h1>'
);
?>


	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php
the_content();
?>


	</div><!-- .entry-content -->
	<?php if (get_field('anwalt')) {
    $anwalt = get_field('anwalt');
    ?>
		<div class="anwalt-footer">
			<a href="<?php echo get_permalink($anwalt); ?>"><img src="<?php the_field('bild', $anwalt);?>" alt="<?php echo get_the_title($anwalt); ?>" class="anwalt-bild"></a>
			<div class="anwalt-text">
				<a href="<?php echo get_permalink($anwalt); ?>"><h3 class="anwalt-name"><?php echo get_the_title($anwalt); ?></h3></a>
				<p class="anwalt-position"><?php the_field('titel', $anwalt);?></p>
				<p class="anwalt-telefon"><?php the_field('telefon', $anwalt);?><br />
				<a href="mailto:<?php the_field('email', $anwalt);?>">

				<?php the_field('email', $anwalt);?></a></p>
	</div>
		</div>
	<?php }?>
	<footer class="entry-footer">
        <?php
// make next and previous post navigation
the_post_navigation(array(
    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Vorheriger Beitrag'),
    'next_text' => '<span class="nav-subtitle">' . esc_html__('Nächster Beitrag'),
));?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
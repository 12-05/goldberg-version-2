<?php
/**
 * Single post template.
 *
 * @package lawyer
 * @since 1.0.0
 *
 */



get_header();

while ( have_posts() ) : 
	the_post(); 

	// Author nick name
	$nickname = get_the_author_meta( 'display_name' );

	// Prev post link 
	$prev_post = get_previous_post();

	// Count post likes
	$count_post_likes = get_post_meta( get_the_ID(), 'count_likes', true );

	// Next post link
	$next_post = get_next_post();

	// Get author info
	$author_id 	   = get_the_author_meta( 'ID' );
	$author_bio    = get_the_author_meta( 'description' );
	$author_avatar = get_avatar( $author_id, 120, '', '', array( 'class' => 's-img-switch' ) );

	$twitter   = get_the_author_meta( 'twitter' );
	$facebook  = get_the_author_meta( 'facebook' );
	$pinterest = get_the_author_meta( 'pinterest' );
	$google    = get_the_author_meta( 'google' ); ?>



		<!-- PAGE HEADING -->
	


		<!-- PAGE HEADING -->
	

		


		<?php if ( is_active_sidebar( 'sidebar-1' ) && $sidebar_position == 'left' ): ?>
			<!-- SIDEBAR -->
			<div class="columns small-12 medium-6 large-3">
				<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar('sidebar-1') ); ?>
			</div>
		<?php endif; ?>

		<div class="block block-text wrapped">
			<article class="post single-post">
				<!-- Post header -->
	

				<!-- Post content -->
				<div class="post__content single-content">
                    <div class="pruefsiegel_header center">
                        <img style="display:block;margin:0 auto;margin-bottom:2rem;" class="siegel" src="<?php echo get_siegel_url(get_the_id());?>" />
                        <h1><?php the_title();?></h1>
                    </div>
                    <?php echo wpautop(get_field('siegeltext'));?>

                
                
                
				
			</article>



		</div>

	
	</div>

<?php
endwhile;
get_footer();


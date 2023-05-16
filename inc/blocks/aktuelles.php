<section class="block block-news">
    <div class="wrapped">
    <h2><?php the_field('headline');?></h2>
    <div class="news-list">
        <?php
	    
	$custom_query = new WP_Query( array(
		'posts_per_page' => 3,
		'post_type' => 'post'
	));
	if ( $custom_query->have_posts() ) {
		while ( $custom_query->have_posts() ) {
			$custom_query->the_post();?>
	       <a class="post" href="<?php echo get_permalink(get_the_id());?>">
                    <div class="date"><?php echo get_the_date('d.m.Y', get_the_id());?></div>
                    <h3><?php echo get_the_title(get_the_id());?></h3>
                    <div class="button">Mehr erfahren<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path></svg></div>
                </a>
	    
	    
	    		<?php
			
			
		}
		wp_reset_postdata();
	}
        ?>
    </div>
    </div>
</section>

<section class="block block-events">
    <div class="wrapped">
    <h2>Veranstaltungen</h2>
    <div class="events-list">
        <?php
	    
	$custom_query = new WP_Query( array(
		'posts_per_page' => 3,
		'post_type' => 'tribe_events'
	));
	if ( $custom_query->have_posts() ) {
		while ( $custom_query->have_posts() ) {
			$custom_query->the_post();?>
	       <a class="post" href="<?php echo get_permalink(get_the_id());?>">
                    <?php if(function_exists('tribe_get_start_date')): ;?>
                        <div class="date"><?php echo tribe_get_start_date(get_the_id());?></div>
                    <?php endif;?>
                    <img alt="event-image" class="event-image" src="<?php echo get_the_post_thumbnail_url(get_the_id());?>" alt="<?php echo get_the_title(get_the_id());?>" />
                    <h3><?php echo get_the_title(get_the_id());?></h3>
                    <div class="button">Jetzt anmelden<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path></svg></div>
                </a>
	    
	    
	    		<?php
			
			
		}
		wp_reset_postdata();
	}
        ?>
    </div>
    </div>
</section>

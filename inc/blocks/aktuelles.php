<section class="block block-news">
    <div class="wrapped">
    <h2><?php the_field('headline');?></h2>
    <div class="news-list">
        <?php $news = get_posts(array(
            'post_type' => 'post', 
            'posts_per_page' => 3
        ));
        if($news) {
            foreach($news as $post) {?>
                <a class="post" href="<?php echo get_permalink($post->ID);?>">
                    <div class="date"><?php echo get_the_date('d.m.Y', $post->ID);?></div>
                    <h3><?php echo get_the_title($post->ID);?></h3>
                    <div class="button">Mehr erfahren<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path></svg></div>
                </a>
            <?php }
        }
        ?>
    </div>
    </div>
</section>
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
                    <div class="excerpt"><?php echo get_the_excerpt($post->ID);?></div>
                </a>
            <?php }
        }
        ?>
    </div>
    </div>
</section>
<?php 
    get_header();?>
    <section class="block block-hero" style="background-image:url(<?php the_field('bild');?>)">
    <div class="wrapped">
        <h1><?php echo get_the_title();?></h1>
    </div>
</section>
<section class="block block-text wrapped <?php  if(get_field('headline_links')) { echo 'headline-links';} ?>">
    <h2><?php the_field('headline');?></h2>
    <div class="content">
        <?php the_field('beschreibung');?>
    </div>
</section>

    
    
    
    <?php get_footer();
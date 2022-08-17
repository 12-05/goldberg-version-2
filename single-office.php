<?php 
    get_header();?>
    <section class="block block-hero" style="background-image:url(<?php the_field('bild');?>)">
    <div class="wrapped">
        <h1><?php echo get_the_title();?></h1>
    </div>
</section>
<section class="block block-text wrapped headline-links">
    <h2>Unser Büro</h2>
    <div class="content">
        <?php the_field('beschreibung');?>
    </div>
</section>

    
    
    
    <?php get_footer();
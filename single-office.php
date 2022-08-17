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
        <div style="float:right;padding:1rem;background:#EEE">
                            <h3><?php echo get_the_title($id);?></h3>
                            <p>
                                Büro <?php echo get_field('stadt');?><br />
                                <?php echo get_field('strasse');?><br />
                                <?php echo get_field('postleitzahl');?> <?php echo get_field('stadt');?>
                            </p>
                            <p>
                                Telefon: <?php echo get_field('telefon');?><br />
                                Telefax: <?php echo get_field('fax');?>
                            </p>

                            <p>
                                E-Mail: <a href="mailto:<?php echo get_field('email');?>"><?php echo get_field('email');?></a>
                            </p>
    </div>
    </div>

</section>

    
    
    
    <?php get_footer();
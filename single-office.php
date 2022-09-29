<?php 
    get_header();?>
    <section class="block block-hero" style="background-image:url(<?php the_field('header_bild');?>)">
    <div class="wrapped">
        <h1><?php echo get_the_title();?></h1>
        
    </div>
</section>
<section class="block block-text wrapped ">
<div class="office-block">
    <div class="iframe"><?php the_field('iframe');?></div>
    <div class="padded">
                            <h3><?php echo get_the_title($id);?></h3>
                            <p>
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
    
    <h2>Unser Büro</h2>
    <div class="content">
 
        <?php the_field('beschreibung');?>
       <div style="clear:both;"></div>
    </div>

</section>

    
    
    
    <?php get_footer();
<?php 
    get_header();?>
    <?php if(get_field('header_video')) { ?>
        <section class="block block-video">
<video  id="hero_video" style="z-index: 0;"  autoplay muted loop playsinline ><source src="<?php the_field('header_video');?>" type="video/mp4"></video>
    <div class="wrapped">
    <h1><?php echo get_the_title();?></h1>
    </div>
      
</section>
    <?php } else { ?>
        <section class="block block-hero" style="background-image:url(<?php the_field('header_bild');?>)">
    <?php } ?>
 
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
                            <?php 
                             $add = get_field('strasse').' '.get_field('postleitzahl').' '.get_field('stadt');
                             $add = urlencode($add);
                             ?>
                            <a href="http://maps.google.com/maps?q=<?php echo $add; ?>">Routenplaner</a>
</div>
    </div>
    
    <h2>Unser Büro</h2>
    <div class="content">
 
        <?php the_field('beschreibung');?>
       <div style="clear:both;"></div>
    </div>

</section>

    
    
    
    <?php get_footer();
<section class="block block-video">
<video  id="hero_video" style="z-index: 0;"  autoplay muted loop playsinline ><source src="<?php the_field('video');?>" type="video/mp4"></video>
    <div class="wrapped">
        <h1><?php the_field('headline');?></h1>
    </div>
    <?php 
    if(get_field('home_siegel', 'option')) {?>
        <div class="home-siegel">
            <img src="<?php the_field('home_siegel', 'option');?>" alt="Siegel" />
        </div>
    <?php } ?>     
</section>
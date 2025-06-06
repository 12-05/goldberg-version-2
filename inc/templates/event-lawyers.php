
<div class="divider"></div>
<h2>Ihre Referenten</h2>
<div class="lawyers">
<?php 

    $lawyers = get_field('lawyers');
    if($lawyers) {
        foreach($lawyers as $lawyer) {?>
            <div class="lawer-box">
                <div class="image-holder">
                <img src="<?php the_field('bild', $lawyer);?>" alt="<?php echo get_the_title($lawyer); ?>" class="lawer-bild" />
        </div>
                <div class="lawer-text">
                    <h3><?php echo get_the_title($lawyer); ?></h3>
                    <p><?php the_field('titel', $lawyer);?></p>
                    <a href="<?php echo get_permalink($lawyer); ?>">Mehr erfahren</a>
                </div>
            </div>
            
    <?php }
    }
    ?>
</div>

<div class="divider"></div>
<section class="block block-bild">
    <?php if(!get_field('fullwidth')) { echo '<div class="wrapped">';}?>
    <img src="<?php the_field('bild');?>" alt="Bild" />
    <?php if(!get_field('fullwidth')) { echo '</div>';}?>
</section>
<section class="block block-hero" style="background-image:url(<?php the_field('bild');?>)">
    <div class="wrapped">
        <h1><?php the_field('headline');?></h1>
        <?php if (get_field('subtext')): ?>
            <div class="subtext">
                <?php the_field('subtext');?>
            </div>
        <?php endif;?>
        <?php if (get_field('checkmarks')): ?>
            <div class="checkmarks">
                <?php foreach (get_field('checkmarks') as $checkmark): ?>
                <div class="checkmark">
                    <?php echo $checkmark['text']; ?>
                </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>

    </div>

</section>
<section class="block block-icons">
    <div class="wrapped">
        <h2><?php the_field('label');?></h2>
        <div class="grid">
            <?php if (get_field('icons')): ?>
                <?php foreach (get_field('icons') as $icon): ?>
                    <div class="icon">
                        <img src="<?php echo $icon['icon']; ?>" alt="Icon">
                        <div class="icon-content">
                            <?php echo $icon['label']; ?>
                        </div>
                    </div>


            <?php endforeach;?>
        <?php endif;?>
        </div>

    </div>
</section>

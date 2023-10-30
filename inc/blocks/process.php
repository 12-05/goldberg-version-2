<div class="block block-process">
    <div class="wrapped">
        <h2><?php the_field('headline');?></h2>
        <div class="process">
            <?php if (get_field('items')): ?>
                <?php foreach (get_field('items') as $item): ?>
                    <div class="item">
                        <div class="item-icon">
                            <img src="<?php echo $item['icon']; ?>" alt="Icon">
                        </div>
                        <div class="item-text">
                            <?php echo $item['text']; ?>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php endif;?>
        </div>
    </div>
</div>
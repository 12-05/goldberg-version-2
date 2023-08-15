<div class="block block-newsletter">
    <div class="wrapped">
    <h2><?php the_field('headline');?></h2>
    <div class="item-grid">
        <?php $items = get_field('reasons');
if ($items): foreach ($items as $item): ?>
						                <div class="item">
						                    <img src="<?php echo $item['icon']; ?>" alt="Icon">
						                    <div class="item-content">
						                        <?php echo $item['text']; ?>
						                    </div>
						                </div>

						            <?php endforeach;endif;?>
    </div>
    <div class="newsletter-wrap">

        <?php echo do_shortcode(get_field('shortcode')); ?>
    </div>
    </div>
</div>

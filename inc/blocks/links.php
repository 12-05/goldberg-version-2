<div class="block block-links">
    <div class="wrapped">
    <div class="left">
        <h2><?php the_field('headline');?></h2>
        <div class="text">
            <?php the_field('text');?>
        </div>
    </div>
    <div class="right">
        <?php if (get_field('links')) {
    foreach (get_field('links') as $link) {?>
            <a href="<?php echo $link['link']['url']; ?>" class="link">

                <div class="text">
                <?php echo $link['link']['title']; ?>
                </div>
            </a>
            <?php
}
}
?>
</div>
    </div>
</div>
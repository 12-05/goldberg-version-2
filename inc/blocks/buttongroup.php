<div class="block block-buttongroup">
    <h2><?php the_field('headline');?></h2>
    <div class="group">
        <?php 
            $links = get_field('links');
            if($links) {
                foreach($links as $link) {?>
                <a href="<?php echo get_permalink($link);?>" class="button-link"><?php echo get_the_title($link);?></a>      
              <?php  
              }
            }
        ?>
    </div>
</div>
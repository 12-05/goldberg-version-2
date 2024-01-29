<section class="block block-text wrapped <?php  if(get_field('headline_links')) { echo 'headline-links';} ?>">
    <h2><?php the_field('headline');?></h2>
    <div class="content">
        <?php echo get_field('content');?>
    </div>
</section>

<?php 
    
    

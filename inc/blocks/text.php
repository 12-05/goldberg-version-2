<section class="block block-text wrapped <?php  if(get_field('headline_links')) { echo 'headline-links';} ?>">
    <?php if(get_field('headline')) { ?>     
<h2><?php the_field('headline');?></h2>
<?php } ?>
    <div class="content">
        <?php echo get_field('content');?>
    </div>
</section>

<?php 
    
    

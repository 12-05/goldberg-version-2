<?php 
    get_header();?>

<div class="wrapped small news-article">
    <span class="date"><?php echo get_the_date('d.m.Y');?></span>
    <h1><?php the_title();?></h1>
    <div class="content"><?php the_content();?></div>
</div>


<?php    
    get_footer();
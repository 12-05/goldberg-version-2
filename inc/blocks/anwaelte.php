<section class="block block-anwaelte">
    <div class="wrapped">
        <h2><?php the_field('headline');?></h2>
        <div class="anwalt-slider">
        <?php $anwaelte = get_field('anwaelte');
            if($anwaelte) {
                foreach($anwaelte as $anwalt) {
                    ?>
                        <a href="<?php echo get_permalink($anwalt);?>" class="anwalt">
                        <div class="bild">
                            <?php if(get_field('bild_vorschau', $anwalt)) {?><img src="<?php the_field('bild_vorschau', $anwalt);?>" alt="<?php echo get_the_title();?>" /><?php } ?>
                        </div>
                            <div class="text">
                            <span class="name"><?php  echo get_the_title($anwalt);?></span>
                            <span class="titel"><?php the_field('titel', $anwalt);?></span>
                            </div>
                        </a>
                    <?php 
                }
            }
        ?>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($){
        $('.anwalt-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            responsive:  [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
   
            }
            },
        ]
        });
    });
</script>
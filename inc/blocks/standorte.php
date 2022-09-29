<section class="block block-standorte">
    <div class="wrapped">
        <h2><?php the_field('headline');?></h2>
        <div class="standort-grid">
        <?php $standorte = get_field('standorte');
            if($standorte) {
                foreach($standorte as $id) {
                    ?>
                        <div class="office">
                            <div class="iframe" style="margin-bottom:2rem"><?php the_field('iframe', $id);?></div>
                            <h3><?php echo get_the_title($id);?></h3>
                            <p>
                                Büro <?php echo get_field('stadt', $id);?><br />
                                <?php echo get_field('strasse', $id);?><br />
                                <?php echo get_field('postleitzahl', $id);?> <?php echo get_field('stadt', $id);?>
                            </p>
                            <p>
                                Telefon: <?php echo get_field('telefon', $id);?><br />
                                Telefax: <?php echo get_field('fax', $id);?>
                            </p>

                            <p>
                                E-Mail: <a href="mailto:<?php echo get_field('email', $id);?>"><?php echo get_field('email', $id);?></a>
                            </p>
                            <a href="<?php echo get_permalink($id);?>" class="so-button">Mehr erfahren</a>
                        </div>
                    <?php 
                }
            }
        ?>
        </div>
    </div>
</section>

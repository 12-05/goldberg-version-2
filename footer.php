</main>
  <footer class="footer"> 
        <div class="footer-top">
            <div class="wrapped">
            <?php 
                $offices = get_posts(
                    array(
                        'post_type' => 'office', 
                        'posts_per_page' => -1,
                        'orderby' => 'date', 
                        'order' => 'ASC'
                    )
                );
                if(is_array($offices)) {
                    foreach($offices as $office) {
                        $id = $office->ID;
                        ?>
                        <div class="office">
                            <h2><?php echo get_the_title($id);?></h2>
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
                        </div>
                        <?php 
            
                    }
                }
                ?>
                </div>
        </div>
        <div class="footer-bottom">
            <div class="wrapped">
                <nav class="footer-nav" aria-label="Footer Navigation">
                    <?php 
                    wp_nav_menu(array(
                        'menu_position' => 'footer'
                    ));?>
                </nav>
                <nav class="social-nav" aria-label="Social Media">
                    <?php   $icons = get_field('social', 'option');
                            if(is_array($icons)) {
                                foreach($icons as $icon) { ?>
                                    <a href="<?php echo $icon['link'];?>"><img src="<?php echo $icon['icon'];?>" alt="icon" /></a>
                                <?php 
                                }
                            }
                    ?>
                </nav>
            </div>
        </div>
    </footer>
    <?php 
    if(get_field('home_siegel', 'option')) {?>
        <div role="complementary" class="home-siegel" aria-label="Home Siegel">
            <img src="<?php the_field('home_siegel', 'option');?>" alt="Siegel" />
        </div>
    <?php } ?>     
                        </div>
                    
                        <?php wp_footer();?>
</body>
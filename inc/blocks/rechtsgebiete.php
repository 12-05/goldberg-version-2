<section class="block block-rechtsgebiete">
    <div class="wrapped">
        <h2><?php the_field('headline');?></h2>
        <div class="grid">
        <?php $rechtsgebiete = get_field('rechtsgebiete');
            if($rechtsgebiete) {
                foreach($rechtsgebiete as $rechtsgebiet) {
                    ?>
                        <a href="<?php echo get_permalink($rechtsgebiet);?>" class="rechtsgebiet">
                            <div class="text">
                            <span class="label"><?php  echo get_the_title($rechtsgebiet);?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="46.557" height="22.827" viewBox="0 0 46.557 22.827">
                                    <g id="surface6499" transform="translate(45.191 1.413) rotate(90)">
                                        <path id="Pfad_5" data-name="Pfad 5" d="M10,1.067V44.191M20,9.3,10,0,0,9.3" transform="translate(0 0)" fill="none" stroke="#19335a" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    <?php 
                }
            }
        ?>
        </div>
    </div>
</section>
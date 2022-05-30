<?php 
    get_header();?>
    <div class="anwalt-profil">
        <section class="anwalt-hero">
            <div class="wrapped">
                <div class="anwalt-hero-content">
                    <div class="anwalt-hero-text">
                        <div class="group">
                            <h1><?php the_title();?></h1>
                            <?php the_field('titel');?>
                        </div>
                        <div class="group">
                            <span class="label">T:</span> <?php the_field('telefon');?><br />
                            <span class="label">E:</span> <?php the_field('email');?>
                            <?php 
                                $standorte = get_field('standorte');
                                if($standorte) {
                                    foreach($standorte as $standort) {
                                        echo '<div class="standort">'.get_field('stadt', $standort->ID).'</div>';
                                    }
                                }
                                ?>
                        </div>
                        <div class="group">
                            <?php 
                             // make a download button with download icon inside for vita_file field
                                $vita_file = get_field('vita_file');
                                if($vita_file) {
                                    echo '<a href="'.$vita_file.'" class="download-button">';
                                    echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg></span>';
                                    echo '</a>';
                                }
                                // make a print button with print icon inside that prints the current page
                                echo '<a href="javascript:window.print()" class="print-button">';
                                echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg></span>';
                                echo '</a>';

                                // make a button with a business card icon that downloads the vcf_file field
                                $vcf_file = get_field('vcf_file');
                                if($vcf_file) {
                                    echo '<a href="'.$vcf_file.'" class="download-button">';
                                    echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg></span>';
                                    echo '</a>';
                                }
                              

                            
                                ?>
                          
                        </div>
                    </div>
                 
                </div>
                <div class="anwalt-hero-bild">
                        <?php if(get_field('bild_vorschau')) {?><img src="<?php the_field('bild');?>" alt="<?php the_title();?>" /><?php } ?>
                    </div>
            </div>
        </section>
        <section class="block block-text headline-links wrapped">
                                <h2>Profil</h2>
                                <div class="content">
                                <?php the_field('profil');?>
                                </div>
        </section>
    </div>


    <?php 
    
    get_footer();
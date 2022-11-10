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
                        

                                // generate download link vcard from name, telefon and email
                                $vcard = 
'BEGIN:VCARD
VERSION:3.0 
N:'.get_the_title().';;;
FN:'.get_the_title().'
TEL;WORK;VOICE:'.get_field('telefon').'
EMAIL;WORK:'.get_field('email').'
END:VCARD';
$vcard_file = 'anwalt-'.get_the_title().'.vcf';
                                                
                                echo '<a href="data:text/vcard;charset=utf-8,'.rawurlencode($vcard).'" download="'.$vcard_file.'" class="download-button">';
                                echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg></span>';
                                echo '</a>';



                                // make an svg image for a user icon
                              

                            
                            
                                ?>
                                <?php if(get_field('linkedin_url')) { ?> 
                                    <a href="<?php the_field('linkedin_url');?>" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24" version="1.1">
<g id="surface270">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(47.45098%,47.45098%,47.45098%);fill-opacity:1;" d="M 19.199219 3.199219 L 4.800781 3.199219 C 3.914062 3.199219 3.199219 3.914062 3.199219 4.800781 L 3.199219 19.199219 C 3.199219 20.085938 3.914062 20.800781 4.800781 20.800781 L 19.199219 20.800781 C 20.085938 20.800781 20.800781 20.085938 20.800781 19.199219 L 20.800781 4.800781 C 20.800781 3.914062 20.085938 3.199219 19.199219 3.199219 Z M 8.761719 17.601562 L 6.402344 17.601562 L 6.402344 10.007812 L 8.761719 10.007812 Z M 7.558594 8.921875 C 6.796875 8.921875 6.183594 8.304688 6.183594 7.542969 C 6.183594 6.785156 6.800781 6.167969 7.558594 6.167969 C 8.316406 6.167969 8.933594 6.785156 8.933594 7.542969 C 8.933594 8.304688 8.316406 8.921875 7.558594 8.921875 Z M 17.601562 17.601562 L 15.246094 17.601562 L 15.246094 13.90625 C 15.246094 13.027344 15.230469 11.894531 14.019531 11.894531 C 12.789062 11.894531 12.601562 12.851562 12.601562 13.84375 L 12.601562 17.601562 L 10.242188 17.601562 L 10.242188 10.007812 L 12.507812 10.007812 L 12.507812 11.042969 L 12.539062 11.042969 C 12.855469 10.445312 13.625 9.816406 14.773438 9.816406 C 17.160156 9.816406 17.601562 11.390625 17.601562 13.433594 Z M 17.601562 17.601562 "/>
</g>
</svg>


                                    </a>
                                <?php } ?>
                          
                        </div>
                    </div>
                 
                </div>
                <div class="anwalt-hero-bild">
                        <?php if(get_field('bild')) {?><img src="<?php the_field('bild');?>" alt="<?php the_title();?>" /><?php } ?>
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
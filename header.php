<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <!--- display wordpress title tag -->
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">


    </head>
    <body <?php body_class();?>>
        <div class="page-wrap">
        <header class="header">
            <div class="logo-wrapper">
                <a href="/"><img class="logo" src="<?php echoImg('goldberg_logo.png');?>" /></a>
            </div>
            <div class="toolbar">
                <div class="phone">
                    <span class="phone-label"><?php echo get_field('telefon', 'option');?></span>                  
                    <img src="<?php echoImg('phone.svg');?>" alt="Telefon" />
                </div>
                <div class="language-menu">
                    <ul>
                        <li>DE</li>
                        <li>EN</li>
                    </ul>
                </div>
                <div class="menu-toggle">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                    <span></span>
                    </label>
                    <div class="nav">
<?php 
wp_nav_menu( array(
    'theme_location' => 'main'
));
?>
                </div>
                </div>
                
               
            </div>
        </header>
        <main>
<?php 


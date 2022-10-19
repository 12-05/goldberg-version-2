<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <!--- display wordpress title tag -->
        <title><?php wp_title('|', true, 'right'); ?> <?php echo get_bloginfo('name');?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">


    </head>
    <body <?php body_class();?>>
        <header class="header">
            <div class="logo-wrapper">
                <a href="/"><img class="logo" src="<?php echoImg('gblogo.png');?>" /></a>
            </div>
            <div class="toolbar">
                <div class="phone">
                    <a href="<?php // get telefon number and remove all symbols
                
                    $phone = get_field('telefon', 'option');
                    $phone = preg_replace('/[^0-9]/', '', $phone);
                    echo 'tel:'.$phone;
                    ?>
                    " class="phone-label"><?php echo get_field('telefon', 'option');?></a>                  
                    <img src="<?php echoImg('phone.svg');?>" alt="Telefon" />
                </div>
                <div class="language-menu">
                <div id="weglot_here"></div> 
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
        <div class="page-wrap">

        <main>
<?php 


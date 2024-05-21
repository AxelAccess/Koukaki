<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
    <html <?php language_attributes(); ?>>
    <head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
	    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <!-- Menu --> 
        <header id="head" class="header">
            <div id="site-navigation" class="main-navigation">
                <H1 class="mainTitle">Fleurs d'oranger & chats errants</H1>
                <span id="burgerQueriesAdapt"> <img class="burger" src="/wp-content/themes/foce-child/assets/image/Blank.png"> </span>
            </div> 

            <!--Full page menu -->
            <div class="hide">

                <!-- Decoration of the menu -->
                <div class="menuDeco">
                <img id="Orchid" class= "cutFlowers" src="wp-content/themes/foce-child/assets/image/menu/Orchid.png" alt="Logo">
                <img id="sunFlower" class= "rotateFlower" src="wp-content/themes/foce-child/assets/image/menu/sunFlower.png" alt="Logo">
                <img id="purpleCat" class= "catFloating" src="wp-content/themes/foce-child/assets/image/menu/purpleCat.png" alt="Logo">
                <img id="randomFlower" class= "cutFlowers" src="wp-content/themes/foce-child/assets/image/menu/random_flower.png" alt="Logo">
                <img id="orangeFlower" class= "rotateFlower" src="wp-content/themes/foce-child/assets/image/menu/orangeFlower.png" alt="Logo">
                <img id="blackCat" class= "catFloating" src="wp-content/themes/foce-child/assets/image/menu/blackCat.png" alt="Logo">
                <img id="orangeCat" class= "catFloating" src="wp-content/themes/foce-child/assets/image/menu/orangeCat.png" alt="Logo">
                <img id="Hibiscus" class= "cutFlowers" src="wp-content/themes/foce-child/assets/image/menu/Hibiscus.png" alt="Logo">
                </div>
                <!-- Decoration of the menu -->

                <!--Link of the menu -->
                <div class="menu"> 
                <img class= "menuLogo" src="wp-content/themes/foce-child/assets/image/menuLogo.png" alt="Logo">
                <li><a class="histoire" href="#story">Histoire</a></li>
                <li><a class="character" href="#character">Personnages</a></li>
                <li><a class="lieu" href="#place">Lieu</a></li>
                <li><a class="studio" href="#studio">Studio Koukaki</a></li>
                <a class="footerMenu">STUDIO KOUKAKI</a>
                </div>
                <!--Link of the menu -->

            </div>   
            <!--Full page menu -->

        </header>
        <!-- Menu -->
    
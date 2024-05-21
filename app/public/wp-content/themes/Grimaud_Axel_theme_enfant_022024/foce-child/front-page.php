<?php

get_header();
?>
<!-- Main page -->
<main id="primary" class="site-main">

    <!-- Banner -->
    <section class="banner">   
        <video id="videoQueryAdapt" autoplay muted loop>
        <source src=/wp-content/themes/foce-child/animatedBanner.mp4>
        </video>
        <div id="logo"> 
            <img class= "logo" src="wp-content/themes/foce-child/assets/image/logo.png" alt="Logo">
        </div>
    </section>
    <!-- Banner --> 
    
    <!-- Story -->
    <section id="story" class="story">
        <!-- The story -->           
        <article id="" class="story__article">
            <img class="background" src="/wp-content/themes/foce-child/assets/image/purple_studio_bg.png">
            <h2 class="titre">L'histoire</h2>
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <!-- The story --> 
        
        <!-- The characters --> 
        <article id="animSection">
            <div class="main-character">
                <img class="characterTitleBackground" src="/wp-content/themes/foce-child/assets/image/orange_characters_bg.png">
                <h3 id="character">Les personnages</h3> 
            </div>    

                    
            <!-- Slider -->
            <div class="swiper">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <!-- Slides -->
                <div class="swiper-wrapper">   

                    <div class="swiper-slide"><img src="/wp-content/themes/foce-child/assets/image/characters/Jaakuna-1.png">
                        <p class="nom">Jaakuna</p>
                    </div>
                    
                    <div class="swiper-slide"><img src="/wp-content/themes/foce-child/assets/image/characters/Kawaneko.png">
                        <p class="nom">Kawaneko</p>
                    </div>
                    
                    <div class="swiper-slide"><img src="/wp-content/themes/foce-child/assets/image/characters/Orenjiiro-1.png">
                        <p class="nom">Orenjiiro</p>
                    </div>
                    
                    <div class="swiper-slide"><img src="/wp-content/themes/foce-child/assets/image/characters/Pinku-1.png">
                        <p class="nom">Pinku</p>
                    </div>
                    
                    <div class="swiper-slide"><img src="/wp-content/themes/foce-child/assets/image/characters/Tenshi-1.png">
                        <p class="nom">Tenshi</p>
                    </div>
                
                </div>
                <!-- Slides -->
            </div>         
            <!-- Slider -->
        </article>    
        <!-- The characters -->

        <!-- The place --> 
        <article id="place">
            <div> 
                <img  class="smallCloud"src="/wp-content/themes/foce-child/assets/image/little_cloud.png">
                <img class="bigCloud" src="/wp-content/themes/foce-child/assets/image/big_cloud.png">
                <img class="placeTitleBackground" src="/wp-content/themes/foce-child/assets/image/orange_place_bg.png">
                <h3 class="place">Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
        <!-- The place --> 
    </section>
    <!-- Story -->

    <!-- The studio -->
    <section id="studio">
        <img class="StudioTitleBackground" src="/wp-content/themes/foce-child/assets/image/purple_studio_bg.png">
        <h2 id=StudioKoukaki>            
            <span class="animFirstWord">Studio</span>
            <span class="animSecondWord">Koukaki</span>
        </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
    </section>
    <!-- The studio -->

    <?php get_template_part('template-parts/festival')?>
    
</main>
<!-- Main page -->
<?php



get_footer();

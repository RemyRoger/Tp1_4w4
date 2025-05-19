<?php
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    $hero_courriel = get_theme_mod('hero_courriel','Default Title');
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title');
    }
    $couleur = substr(get_theme_mod('hero_icone', '#fff'),1);
    $couleur_texte = get_theme_mod('hero_icone', '#fff');


for ($k=0; $k<3; $k++){
$hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
}
?>
<style>
     .hero{
        color:  <?php echo $couleur_texte ?>;
     }
 </style>
<section class="hero">
    <!-- ///////////////////////////////////////////////// hero__carrousel -->
    <div class="hero__carrousel"  style="background-image: url('<?php echo $hero_background[0] ?>');" ></div>    
    <div class="hero__carrousel"  style="background-image: url('<?php echo $hero_background[1] ?>');" ></div> 
    <div class="hero__carrousel"  style="background-image: url('<?php echo $hero_background[2] ?>');" ></div> 
    <div class="hero__radio">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="0"  checked="checked">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="1">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="2">
    </div>
    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
        <div class="hero__animation">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
        </div>
        
        <a href="" class="hero__courriel">
            info@cmaisonneuve.qc.ca
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <div class="hero__icone-app">
            <?php 
    $reseaux = ['facebook', 'linkedin', 'paypal', 'stackoverflow', 'github'];
    foreach ($reseaux as $reseau) {
        $lien = get_theme_mod("lien_$reseau");
        if ($lien) {
            echo '<a href="' . esc_url($lien) . '" target="_blank" rel="noopener">
                    <img src="https://s2.svgbox.net/social.svg?ic=' . $reseau . '&color=000000" width="20" height="20" alt="' . esc_attr($reseau) . '">
                  </a>';
        }
    }
    ?>
        </div>
        <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>
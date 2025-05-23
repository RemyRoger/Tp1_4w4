<?php
/**
 * Template Name: Destinations par Pays
 */
$footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#A2E9FF');
get_header(); ?>
<section class="contenu-editeur">
  <div class="contenu-pays">
    
    <h1>Pays</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
  </div>
  <?php créer_vague('#f0f0f0', '#42f5d4'); ?>
</section>
<section class="rest-api">
    
    
<div class="menu-pays" id="menuPays"></div>
<div id="paysSelectionne" class="pays-selectionne"></div>
<div class="destination__list"></div>

    <?php get_footer(); ?>
</section>





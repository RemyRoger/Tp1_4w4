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
    <h1>RESTAPI</h1>
    

    <ul class="categorie__ul">
        <li class="categorie__ul__li selected" data-id="3">France</li>
        <li class="categorie__ul__li" data-id="4">États-Unis</li>
        <li class="categorie__ul__li" data-id="5">Canada</li>
        <li class="categorie__ul__li" data-id="6">Argentine</li>
        <li class="categorie__ul__li" data-id="7">Chili</li>
        <!-- Ajoute d'autres pays ici avec leurs vrais ID WordPress -->
    </ul>

    <div class="destination__list"></div>
    <?php vague($footer_couleur_arriere); ?>
</section>



<?php get_footer(); ?>

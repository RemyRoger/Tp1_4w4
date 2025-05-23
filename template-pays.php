<?php
/**
 * Template Name: Destinations par Pays
 */

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
</section>


<?php get_footer(); ?>

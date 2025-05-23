<?php

/**Gabarit pour faire des cartes */
?>

<article class="carte carte--grande">

    <div class="carte__contenu">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail');
        }
        ?>
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></p>
        <a href="<?php the_permalink() ?>" class="carte__bouton carte__bouton--actif">Suite...</a>  
        <?php the_category() ?>
        <p>Température maximum :<?php echo the_field("temperature_maximum"); ?>°C</p>
        <p>Température minimum :<?php echo the_field("temperature_minimum"); ?>°C</p>
        <p>Température moyenne :<?php echo the_field("temperature_moyenne"); ?>°C</p>
    </div>

</article>
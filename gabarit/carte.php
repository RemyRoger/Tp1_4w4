<?php 
/**Gabarit pour faire des cartes */
?>

<article class="carte carte--grande">
                     <figure class="carte__image">
                        <img src="images/img1.jpg" alt="Image de voyage">
                    </figure>
                    <div class="carte__contenu">
                        <?php 
                            if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail'); } 
                            ?>
                    <h2 class="carte__titre"><?php the_title(); ?></h2>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></p>
                    <a href="<?php the_permalink() ?>"></a>
                    <button class="carte__bouton carte__bouton--actif">Suite</button>
                    <?php the_category() ?>
                    <p>Température maximum <?php echo the_field("temperature_maximum");?></p>
                    <p>Température minimum <?php echo the_field("temperature_minimum"); ?></p>
                </div>
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="pouplaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></div>
            </article>
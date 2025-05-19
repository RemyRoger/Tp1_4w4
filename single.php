<?php get_header(); ?>
<h1>Destinations</h1>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire__article">

            <!-- Image mise en avant ou image par défaut -->
            <div class="populaire__image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } else {
                    $default_image = get_theme_mod('image_defaut_article');
                    if ($default_image) {
                        echo '<img src="' . esc_url($default_image) . '" alt="Image par défaut">';
                    } else {
                        echo '<p>Aucune image disponible.</p>';
                    }
                }
                ?>
            </div>

            <!-- Titre / Nom de la destination -->
            <h2 class="populaire__titre"><?php the_title(); ?></h2>

            <!-- Auteur personnalisé depuis le Customizer -->
            <p class="populaire__auteur">
                Auteur : <?php echo esc_html(get_theme_mod('hero_auteur', 'Auteur inconnu')); ?>
            </p>

            <!-- Date de publication -->
            <p class="populaire__date">
                Publié le : <?php echo get_the_date(); ?>
            </p>

            <!-- Liste des catégories -->
            <p class="populaire__categories">
                Catégories :
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                    $cat_names = array_map(function($cat) {
                        return esc_html($cat->name);
                    }, $categories);
                    echo implode(', ', $cat_names);
                } else {
                    echo 'Aucune';
                }
                ?>
            </p>

            <!-- Contenu de l’article -->
            <div class="populaire__contenu"><?php the_content(); ?></div>

            <!-- Températures -->
            <?php
            $min = get_field('temperature_minimum');
            $max = get_field('temperature_maximum');
            $moy = get_field('temperature_moyenne');

            if ($min || $max || $moy) :
            ?>
            <div class="populaire__temperatures">
                <h3>Températures</h3>
                <ul>
                    <?php if ($min) : ?><li>Minimale : <?php echo esc_html($min); ?> °C</li><?php endif; ?>
                    <?php if ($max) : ?><li>Maximale : <?php echo esc_html($max); ?> °C</li><?php endif; ?>
                    <?php if ($moy) : ?><li>Moyenne : <?php echo esc_html($moy); ?> °C</li><?php endif; ?>
                </ul>
            </div>
            <?php endif; ?>

        </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>

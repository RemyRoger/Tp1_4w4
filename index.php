<?php 
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page 
 * 
 */
//////permet d'afficher la page d'erreur 404.php si l'adresse n'existe pas/////
    $page = $_GET['page'] ?? '';

    if (file_exists($page . ".php")) {
        include $page . ".php";
    } else {
        http_response_code(404);
        include "404.php";
        exit;
    }
?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail'); } 
                        ?>
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="pouplaire__contenu"><?php the_content(); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
   <?php get_footer(); ?>
</body>
</html>
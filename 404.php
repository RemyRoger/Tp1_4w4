<?php get_header() ?>
<?php $erreur_image = get_theme_mod('erreur_image', 'Default Title'); ?>
<?php $erreur_titre = get_theme_mod('erreur_titre', 'Default Title'); ?>
    <div class="erreur">
        <section class="erreur__section">
            <h1><?php echo $erreur_titre ?></h1>
            <img class="erreur__image" src="<?php echo $erreur_image ?>" alt="">
            <form method="post">
            <p><a href="<?php echo home_url('/'); ?>">Retour à l'accueil</a></p>

       </section>
    </div>
<?php get_footer() ?>
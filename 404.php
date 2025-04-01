<?php get_header() ?>
<?php $erreur_image = get_theme_mod('erreur_image', 'Default Title'); ?>
<?php $erreur_titre = get_theme_mod('erreur_titre', 'Default Title'); ?>
<?php $erreur_background = get_theme_mod('erreur_background', 'Default Title'); ?>
<?php $couleur_pageErreur = get_theme_mod('$couleur_pageErreur', '#fff') ?>
<style>
    .erreur__section{
        color:  <?php echo $couleur_pageErreur ?>;
    }
</style>
    <div class="erreur__div" style="background-image: url('<?php echo $erreur_background ?>'); background-repeat : no-repeat; width: 100%; max-width: 100vw; height: 1080px; max-height: 100%" >
        <section class="erreur__section">
            <h1 class="erreur__titre"><?php echo $erreur_titre ?> </h1>
            <p class="erreur__para">Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !</p>    
            <p class="retour__accueil"><a href="<?php echo home_url('/'); ?>">Retour à l'accueil</a></p>
        </section>
    </div>
<?php get_footer() ?>
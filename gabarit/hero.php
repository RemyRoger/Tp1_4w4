<?php $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); ?>
<?php for ($k=0; $k<3; $k++ ){
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title');
} ?>

<?php $couleur = substr(get_theme_mod('hero_icone', '#fff') ,1 )?>
<?php $couleur_texte = get_theme_mod('hero_icone', '#fff') ?>
<style>
    .hero{
        color:  <?php echo $couleur_texte ?>;
    }
</style>
<!-- //////////////////////////Hero carroussel///////////////////////////////////-->
    <section class="hero" >
        <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[0] ?>')"></div>
        <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[1] ?>')"></div>
        <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[2] ?>')"></div>
        <div class="hero__radio">
            <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="0">
            <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="1">
            <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="2">

        </div>
<!-- //////////////////////////Hero contenu///////////////////////////////////-->
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php echo bloginfo('name') ?>
            </h1>
            <p class="hero__description">
                <?php echo bloginfo('description') ?>
            </p>
            <p class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </p>
            <p class="hero__addresse">
                3800, rue Sherbrooke, Montreal
            </p>
            <p class="hero__numero">
                514-254-7131
            </p>
            <button class="hero__bouton">
                s'inscrire
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $couleur ?>" width="20" height="20">
            </div>
            <p> Auteur: <?php echo $hero_auteur ?></p>
        </div>
    </section>
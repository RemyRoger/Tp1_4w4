<?php get_header() ?>
<?php $erreur_image = get_theme_mod('erreur_image', 'Default Title'); ?>
    <div>
        <section class="erreur" style="img: url('<?php echo $erreur_image?>');">
            <img src="<?php echo $erreur_image ?>" alt="">
    </div>
<?php get_footer() ?>
<?php get_header() ?>
<?php $erreur_image = get_theme_mod('erreur_image', 'Default Title'); ?>
<?php $erreur_titre = get_theme_mod('erreur_titre', 'Default Title'); ?>
    <div>
        <section class="erreur">
            <h1><?php echo $erreur_titre ?></h1>
            <img src="<?php echo $erreur_image ?>" alt="">
            <?php wp_nav_menu(array(
                'menu'  => 'Erreur  ',
		        'container'  => 'div',
		        'container_class'=> '',
            )); ?>
    </div>
<?php get_footer() ?>
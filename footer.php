<footer>
    <?php $footer_mission = get_theme_mod('hero_title', 'Mission du Club'); ?>
    <?php $couleur = substr(get_theme_mod('hero_icone', '#fff') ,1 )?>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam 
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
               <?php echo $footer_mission ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $couleur ?>" width="20" height="20">
        <section class="piedpage__s3"></section>
        <?php wp_nav_menu(array(
                'menu'  => 'principal',
		        'container'  => 'div',
		        'container_class'=> '',
            )); ?>

    </div>
</footer>
<?php wp_footer() ?>
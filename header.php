<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="normalize.css"> -->
   <!-- <link rel="stylesheet" href="style.css">-->
    <?php wp_head(); ?> 
</head>
<body>
    <header>
    <div class="entete">
        <figure class="entete__logo">
            <?php echo get_custom_logo(); ?>
        </figure>

        <!-- Burger visible en mobile -->
        <label for="chk__burger" class="burger">
            <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32">
        </label>

        <!-- Checkbox cachée qui contrôle le menu -->
        <input type="checkbox" id="chk__burger" class="chk__burger">

        <!-- Menu principal -->
        <div class="entete__nav">
            <?php wp_nav_menu(array(
                'menu' => 'principale',
                'container' => 'div',
                'container_class' => '',
            )); ?>

            <div class="entete__recherche">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>


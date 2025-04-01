<?php
function theme_31w_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  ////////////////////auteur///////////////////////////
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
));
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Remy', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Hero Auteur', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));

///////////////////////background////////////////////////////
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Hero Background Image', 'theme_31w'),
  'section' => 'hero_section',
)));
//////////////////nouvelle section footer///////////////////////
$wp_customize->add_section('footer_section', array(
  'title' => __('Section pied de page', 'theme_31w'),
  'priority' => 30,
));
//////////////////////champ mission///////////////////////////
$wp_customize->add_setting('footer_mission', array(
  'default' => __('Mission du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));
///////////////////couleur du texte de la zone hero////////////////////////
$wp_customize->add_setting('hero_icone', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_icone', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'hero_section',
)));
 ////////////////////////Champ adresse/////////////////////////////
 $wp_customize->add_setting('footer_adresse', array(
  'default' => __('Adresse', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_adresse', array(
  'label' => __('Adresse', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));
  ///////////////////////////Champ telephone///////////////////////////
$wp_customize->add_setting('footer_telephone', array(
  'default' => __('Telephone', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));
  
  $wp_customize->add_control('footer_telephone', array(
  'label' => __('Telephone', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));
///////////////////////////Page 404////////////////////////////////
$wp_customize->add_section('erreur_section', array(
  'title' => __('Page 404', 'theme_31w'),
  'priority' => 30,
));

/////////////////////////Titre 404//////////////////////////
$wp_customize->add_section('erreur_section', array(
  'title' => __('Page 404', 'theme_31w'),
  'priority' => 30,
));
$wp_customize->add_setting('erreur_titre', array(
'default' => __('Page Introuvable', 'theme_31w'),
'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_titre', array(
'label' => __('Titre', 'theme_31w'),
'section' => 'erreur_section',
'type' => 'text',
));
///////////////////////background Image 404////////////////////////////
$wp_customize->add_setting('erreur_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
  'label' => __('Background Image', 'theme_31w'),
  'section' => 'erreur_section',
)));
//////////////////////Paragraphe Page 404///////////////////////////
$wp_customize->add_setting('erreur_description', array(
  'default' => __('Paragraphe', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_description', array(
  'label' => __('Paragraphe', 'theme_31w'),
  'section' => 'erreur_section',
  'type' => 'text',
));
///////////////////couleur du texte de la page 404////////////////////////
$wp_customize->add_setting('couleur_page404', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'couleur_page404', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'erreur_section',
)));

}



add_action('customize_register', 'theme_31w_customize_register');
  ?>
<?php
/**
 * Traitement des images svg
 */

function vague($couleur = '#33ecff', $height = '320', $top = '10px') {
?>
<svg 
    xmlns="http://www.w3.org/2000/svg" 
    class="vague"
    style="position:relative; top:<?= $top ?>;"
    viewBox="0 0 1440 <?= $height ?>">
    <path 
        fill="#33ecff" 
        fill-opacity="1" 
        d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,154.7C672,149,768,203,864,213.3C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,<?= $height ?>L1392,<?= $height ?>C1344,<?= $height ?>,1248,<?= $height ?>,1152,<?= $height ?>C1056,<?= $height ?>,960,<?= $height ?>,864,<?= $height ?>C768,<?= $height ?>,672,<?= $height ?>,576,<?= $height ?>C480,<?= $height ?>,384,<?= $height ?>,288,<?= $height ?>C192,<?= $height ?>,96,<?= $height ?>,48,<?= $height ?>L0,<?= $height ?>Z">
    </path>
</svg>

<?php }
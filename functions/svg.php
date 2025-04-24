<?php 
/*
Traitement des images svg
*/
function vague($couleur){


 ?>
<svg class="vague" xmlns="http://www.w3.org/2000/svg"
class ="vague"
style="top:10px;" 
viewBox="0 0 1440 320">
    <path 
    fill="<?= $couleur ?>" 
    fill-opacity="1" 
    d="M0,256L48,229.3C96,203,192,149,288,133.3C384,117,480,139,576,170.7C672,203,768,245,864,229.3C960,213,1056,139,1152,101.3C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>
<?php } ?>
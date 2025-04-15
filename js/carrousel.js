(function(){
    console.log("carrousel.js");

    let heroRadios = document.querySelectorAll(".hero__radio__input");
    let carrousels = document.querySelectorAll(".hero__carrousel");
    let current = 0;
    const total = carrousels.length;

    // Initialisation : activer le premier carrousel
    carrousels[current].classList.add("active");
    if (heroRadios[current]) {
        heroRadios[current].checked = true;
    }

    setInterval(() => {
        // Retirer la classe active de l'actuel
        carrousels[current].classList.remove("active");

        // Passer au suivant
        current = (current + 1) % total;

        // Ajouter la classe active au nouveau
        carrousels[current].classList.add("active");

        // Cocher le bouton radio correspondant
        if (heroRadios[current]) {
            heroRadios[current].checked = true;
        }

    }, 5000);
})();


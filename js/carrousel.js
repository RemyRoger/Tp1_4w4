(function(){
    console.log("carrousel.js");

    let heroRadios = document.querySelectorAll(".hero__radio__input");
    let carrousels = document.querySelectorAll(".hero__carrousel");
    let current = 0;
    const total = carrousels.length;

    // Initialisation : activer le premier carrousel
    carrousels[current].classList.add("hero__carrousel--active");
    if (heroRadios[current]) {
        heroRadios[current].checked = true;
    }

    // Changement automatique toutes les 5 secondes
    setInterval(() => {
        // Retirer la classe active de l'actuel
        carrousels[current].classList.remove("hero__carrousel--active");

        // Passer au suivant
        current = (current + 1) % total;

        // Ajouter la classe active au nouveau
        carrousels[current].classList.add("hero__carrousel--active");

        // Cocher le bouton radio correspondant
        if (heroRadios[current]) {
            heroRadios[current].checked = true;
        }

    }, 5000);

    // Activation manuelle via radio bouton
    heroRadios.forEach((radio, index) => {
        radio.addEventListener("mousedown", () => {
            carrousels[current].classList.remove("hero__carrousel--active");
            current = index;
            carrousels[current].classList.add("hero__carrousel--active");
        });
    });

})();
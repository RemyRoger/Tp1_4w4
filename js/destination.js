(function () {
    console.log("vive Javascript");

    const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;

    const paysListe = [
        "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique",
        "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
    ];

    const menuContainer = document.getElementById('menuPays');

    // Génère les boutons pour chaque pays
    paysListe.forEach((pays, index) => {
        const btn = document.createElement('button');
        btn.classList.add('pays__item');
        if (index === 0) btn.classList.add('selected'); // France par défaut
        btn.dataset.pays = pays;
        btn.textContent = pays;
        menuContainer.appendChild(btn);
    });

    // Fonction de récupération des articles
    function fetchDestinations(pays) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(pays)}`;
        console.log("API URL:", apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = '';

                data.forEach(article => {
                    // Filtrer la catégorie populaire (ID 5)
                    if (article.categories.includes(5)) return;

                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3 class="TitreArticleCategorie">${article.title.rendered}</h3>
                        <div class="descriptionArticleCategorie">${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });

                // Accordéon
                const titres = document.getElementsByClassName('TitreArticleCategorie');
                Array.from(titres).forEach(titre => {
                    titre.addEventListener('click', () => {
                        const desc = titre.nextElementSibling;
                        const isOpen = desc.style.maxHeight;

                        // Ferme tout
                        Array.from(document.getElementsByClassName('descriptionArticleCategorie')).forEach(el => {
                            el.style.maxHeight = null;
                            el.classList.remove('open');
                        });

                        if (!isOpen) {
                            desc.style.maxHeight = desc.scrollHeight + "px";
                            desc.classList.add('open');
                        }
                    });
                });
            })
            .catch(error => console.error('Erreur API:', error));
    }

            // Ajouter les événements aux boutons
        document.querySelectorAll('.pays__item').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.pays__item').forEach(b => b.classList.remove('selected'));
                btn.classList.add('selected');

                const paysNom = btn.dataset.pays;
                document.getElementById('paysSelectionne').textContent = `${paysNom}`;
                fetchDestinations(paysNom);
            });
        });


    // Chargement initial des destinations pour la France
    fetchDestinations("France");

})();

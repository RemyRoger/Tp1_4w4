(function () {
    console.log("vive Javascript - pays");

    const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;

    const paysListe = [
        "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique",
        "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
    ];

    window.addEventListener("DOMContentLoaded", function () {
        const menuContainer = document.getElementById('menuPays');
        if (!menuContainer) return;

        paysListe.forEach((pays, index) => {
            const btn = document.createElement('button');
            btn.classList.add('pays__item');
            if (index === 0) btn.classList.add('selected');
            btn.dataset.pays = pays;
            btn.textContent = pays;
            menuContainer.appendChild(btn);
        });

        function fetchDestinations(pays) {
            const apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(pays)}`;
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const destinationList = document.querySelector('.destination__list');
                    if (!destinationList) return;
                    destinationList.innerHTML = '';

                    data.forEach(article => {
                        if (article.categories.includes(5)) return; // Exclure "populaire"

                        const articleElement = document.createElement('div');
                        articleElement.innerHTML = `
                            <h3 class="TitreArticleCategorie">${article.title.rendered}</h3>
                            <div class="descriptionArticleCategorie">${article.excerpt.rendered}</div>
                            <a href="${article.link}">Lire plus</a>
                        `;
                        destinationList.appendChild(articleElement);
                    });

                    const titres = document.getElementsByClassName('TitreArticleCategorie');
                    Array.from(titres).forEach(titre => {
                        titre.addEventListener('click', () => {
                            const desc = titre.nextElementSibling;
                            const isOpen = desc.style.maxHeight;
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

        // Ajout des événements sur les boutons
        document.querySelectorAll('.pays__item').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.pays__item').forEach(b => b.classList.remove('selected'));
                btn.classList.add('selected');

                const paysNom = btn.dataset.pays;
                const labelPays = document.getElementById('paysSelectionne');
                if (labelPays) labelPays.textContent = paysNom;

                fetchDestinations(paysNom);
            });
        });

        // Chargement initial
        fetchDestinations("France");
    });
})();
(function () {
    console.log("vive Javascript - catégories");

    window.addEventListener("DOMContentLoaded", function () {
        let categoryId = 3;
        const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

        if (!categorie__ul__li.length) return;

        categorie__ul__li.forEach(li => {
            li.addEventListener("click", function () {
                categoryId = li.dataset.id;
                apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
                mon_fetch(apiUrl);
            });
        });

        function mon_fetch(apiUrl) {
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const destinationList = document.querySelector('.destination__list');
                    if (!destinationList) return;

                    destinationList.innerHTML = '';
                    data.forEach(article => {
                        const articleElement = document.createElement('div');
                        articleElement.innerHTML = `
                            <h3 class="TitreArticleCategorie">${article.title.rendered}</h3>
                            <div class="descriptionArticleCategorie">${article.excerpt.rendered}</div>
                            <a href="${article.link}">Lire plus</a>
                        `;
                        destinationList.appendChild(articleElement);
                    });

                    const titreElements = document.getElementsByClassName('TitreArticleCategorie');
                    Array.from(titreElements).forEach(titre => {
                        titre.addEventListener('click', function () {
                            const desc = titre.nextElementSibling;
                            const isOpen = desc.style.maxHeight;
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
                .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        }
    });
})();

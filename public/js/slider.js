document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    // Ajout d'une validation simple avant soumission
    form.addEventListener("submit", function (e) {
        const nom = document.getElementById("nom").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!nom || !email || !message) {
            e.preventDefault(); // Empêcher l'envoi du formulaire
            alert("Veuillez remplir tous les champs requis !");
        }
    });

    // Code du slider
    const slider = document.querySelector('.competences-container');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const containers = document.querySelectorAll('.container');
    const indicators = document.querySelectorAll('.indicator'); // Récupère les indicateurs

    let currentIndex = 0;
    const itemsToShow = 0; // Nombre d'éléments visibles
    const totalItems = containers.length;

    function updateSlider() {
        // const sliderWidth = itemWidth * itemsToShow;  // Largeur du slider pour 3 éléments visibles
        const itemWidth = containers[0].offsetWidth; // Largeur de l'élément
        slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

        // Met à jour l'indicateur actif
        indicators.forEach((indicator, index) => {
            indicator.classList.remove('active');
            if (index === currentIndex) {
                indicator.classList.add('active');
            }
        });
    }

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;  // Décrémenter l'index pour afficher l'image précédente
        }
        updateSlider();
    });

    nextBtn.addEventListener('click', () => {
        if (currentIndex < totalItems - 1) {
            currentIndex++;  // Incrémenter l'index pour afficher l'image suivante
        }
        updateSlider();
    });

    // Ajout de la fonctionnalité pour les indicateurs
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateSlider();
        });
    });

    window.addEventListener('resize', updateSlider); // Met à jour sur redimensionnement

    // Initialisation
    updateSlider();
});

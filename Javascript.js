/* --- 1. EFFET TYPEWRITER (Machine à écrire) --- */
const textElement = document.getElementById('typewriter');
const phrases = [
    "de l'Automatique", 
    "des Systèmes Embarqués", 
    "de l'Électronique de Puissance",
    "de la Robotique"
];

let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
    const currentPhrase = phrases[phraseIndex];

    if (isDeleting) {
        textElement.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
    } else {
        textElement.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
    }

    let typeSpeed = isDeleting ? 50 : 100;

    if (!isDeleting && charIndex === currentPhrase.length) {
        typeSpeed = 2000; 
        isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % phrases.length;
        typeSpeed = 500;
    }

    setTimeout(type, typeSpeed);
}

document.addEventListener('DOMContentLoaded', type);


/* --- 2. EFFET PARTICULES TECH --- */
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": { "enable": true, "value_area": 800 }
        },
        "color": { "value": "#2563eb" }, /* Couleur Bleue */
        "shape": { "type": "circle" },
        "opacity": { "value": 0.5, "random": false },
        "size": { "value": 3, "random": true },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#2563eb",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": { "enable": true, "mode": "grab" }, /* Effet aimant souris */
            "onclick": { "enable": true, "mode": "push" },
            "resize": true
        }
    },
    "retina_detect": true
});

/* --- 3. GESTION DES ONGLETS COMPÉTENCES --- */
const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // 1. On retire la classe 'active' de tous les boutons et contenus
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        // 2. On ajoute la classe 'active' au bouton cliqué
        button.classList.add('active');

        // 3. On récupère l'ID cible (ex: "prog") et on affiche le contenu correspondant
        const targetId = button.getAttribute('data-target');
        document.getElementById(targetId).classList.add('active');
    });
});

/* --- GESTION DES MODALES (POP-UPS) --- */

// Fonction pour ouvrir une modale
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "block";
        document.body.style.overflow = "hidden"; // Empêche le scroll du site derrière
    }
}

// Fonction pour fermer une modale
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Réactive le scroll
    }
}

// Fermer si on clique en dehors de la boîte blanche
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
        document.body.style.overflow = "auto";
    }
}

/* --- GESTION DES POP-UPS PROJETS --- */

// Ouvrir
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "block";
        document.body.style.overflow = "hidden"; // Bloque le scroll derrière
    }
}

// Fermer
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Débloque le scroll
    }
}

// Fermer en cliquant à côté
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
        document.body.style.overflow = "auto";
    }
}


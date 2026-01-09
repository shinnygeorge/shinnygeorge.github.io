<div id="modal-drone" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-drone')">&times;</span>
        
        <div class="modal-header">
            <h2>Commande de Drone par Gestes</h2>
            <span class="modal-tag">Vision par Ordinateur & IHM</span>
        </div>

        <div class="modal-body-grid">
            <div class="modal-visual">
                <img src="drone.jpg" alt="Interface Drone" class="modal-img-real" onerror="this.style.display='none';">
                <div class="img-placeholder"><i class="fas fa-helicopter"></i></div>
            </div>

            <div class="modal-desc">
                <h3><i class="fas fa-bullseye"></i> Le Projet</h3>
                <p>Développement d'une interface "sans contact" permettant de piloter un minidrone Parrot uniquement via la reconnaissance de mouvements de la main, sans manette physique.</p>

                <h3><i class="fas fa-microchip"></i> Détails Techniques</h3>
                <ul class="tech-list">
                    <li><strong>Vision Artificielle :</strong> Acquisition du flux vidéo webcam et traitement d'image en temps réel sous <strong>MATLAB</strong>.</li>
                    <li><strong>Algorithme :</strong> Segmentation de la peau (YCrCb), tracking du centre de gravité de la main et détection de gestes (Haut, Bas, Rotation).</li>
                    <li><strong>Communication :</strong> Envoi des commandes de vol (Tangage, Roulis, Gaz) au drone via <strong>Bluetooth Low Energy</strong>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="modal-plateforme" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-plateforme')">&times;</span>
        
        <div class="modal-header">
            <h2>Plateformes Pédagogiques Automatisées</h2>
            <span class="modal-tag">R&D & Ingénierie de Contrôle</span>
        </div>

        <div class="modal-body-grid">
            <div class="modal-visual">
                <img src="plateforme.jpg" alt="Banc Control'X" class="modal-img-real" onerror="this.style.display='none';">
                <div class="img-placeholder"><i class="fas fa-cogs"></i></div>
            </div>

            <div class="modal-desc">
                <h3><i class="fas fa-bullseye"></i> Objectif</h3>
                <p>Développement et validation de bancs d'essais pour l'enseignement supérieur (Master). L'objectif est de combler le fossé entre la simulation théorique (Simulink) et la réalité industrielle.</p>

                <h3><i class="fas fa-tasks"></i> Systèmes Étudiés</h3>
                <ul class="tech-list">
                    <li><strong>Plateforme Control'X :</strong> Pilotage d'un axe linéaire industriel (Schneider Electric). Simulation de chaînes de production (positionnement précis, tri).</li>
                    <li><strong>Plateforme D2C (Drone) :</strong> Stabilisation d'un système instable (balancier). Réglage de correcteurs <strong>PID</strong> pour maintenir l'équilibre.</li>
                    <li><strong>Outils :</strong> Utilisation des logiciels <em>Control'Drive</em> et <em>D2C_IHM</em>. Comparaison des courbes réelles vs simulées.</li>
                </ul>
                
                <div class="modal-actions">
                    <a href="Rapport Projet-2.pdf" class="btn-modal secondary" download><i class="fas fa-file-pdf"></i> Voir le Rapport</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-robot" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-robot')">&times;</span>
        
        <div class="modal-header">
            <h2>Robot Autonome de Compétition</h2>
            <span class="modal-tag">Système Embarqué & Mécatronique</span>
        </div>

        <div class="modal-body-grid">
            <div class="modal-visual">
                <img src="robot.jpg" alt="Mon Robot" class="modal-img-real" onerror="this.style.display='none';">
                <div class="img-placeholder"><i class="fas fa-robot"></i></div>
            </div>

            <div class="modal-desc">
                <h3><i class="fas fa-bullseye"></i> Le Défi Technique</h3>
                <p>Conception complète d'un robot capable de valider un parcours d'obstacles complexe de manière 100% autonome en temps limité.</p>

                <h3><i class="fas fa-road"></i> Étapes du Parcours</h3>
                <ul class="tech-list">
                    <li><strong>Navigation :</strong> Suivi de ligne noire (Capteurs IR) et traversée de tunnel "à l'aveugle" (Suivi de mur via Ultrasons).</li>
                    <li><strong>Évitement :</strong> Détection d'obstacles et contournement dynamique (gauche ou droite) avec récupération de trajectoire.</li>
                    <li><strong>Actions Mécaniques :</strong>
                        <ul>
                            <li>Montée de pente et détection de couleur cible.</li>
                            <li><strong>Système de Tir :</strong> Utilisation d'une catapulte motorisée pour envoyer une balle dans un panier final.</li>
                        </ul>
                    </li>
                </ul>
                
                <div class="modal-actions">
                    <a href="Rapport technique Sem2.docx.pdf" class="btn-modal secondary" download><i class="fas fa-file-pdf"></i> Lire le Rapport</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-web" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-web')">&times;</span>
        
        <div class="modal-header">
            <h2>Site Web Interactif : Jojo's Bizarre Adventure</h2>
            <span class="modal-tag">Développement Fullstack</span>
        </div>

        <div class="modal-body-grid">
            <div class="modal-visual">
                <img src="site-jojo.jpg" alt="Capture Site Web" class="modal-img-real" onerror="this.style.display='none';">
                <div class="img-placeholder" style="background: linear-gradient(135deg, #6b21a8, #d946ef); color: white;">
                    <i class="fas fa-code"></i>
                </div>
            </div>

            <div class="modal-desc">
                <h3><i class="fas fa-bullseye"></i> Le Projet</h3>
                <p>Création d'un site web immersif dédié au manga. L'objectif était de maîtriser les langages natifs (sans Framework) et la structuration de données.</p>

                <h3><i class="fas fa-code"></i> Fonctionnalités</h3>
                <ul class="tech-list">
                    <li><strong>Navigation par Onglets :</strong> Système fluide pour basculer entre les fiches personnages des différentes parties.</li>
                    <li><strong>Interactivité (Pop-ups) :</strong> Développement JS de boutons déclenchant des modales pour les synopsis des 6 parties de l'anime.</li>
                    <li><strong>Contenu :</strong> Section "Anecdotes" sur l'auteur Hirohiko Araki.</li>
                </ul>

                <h3><i class="fas fa-laptop-code"></i> Stack</h3>
                <p class="tech-stack-inline">HTML5 • CSS3 • PHP • JavaScript</p>
            </div>
        </div>
    </div>
</div>
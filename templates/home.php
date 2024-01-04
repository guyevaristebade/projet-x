<header class="carousel-section">
    <div class="carousel-container">
        <div class="carousel" style="transform: translateX(-1400px);">
            <div class="slide" id="slide1">
                <div class="content-slider">
                    <h1>Réducteur</h1>
                    <p>
                        Une large gamme de réducteurs pour l'industrie. Nombreuses variantes possibles :
                    </p>
                    
                    <ul>
                        <li>Carcasse aluminium, fonte</li>
                        <li>Arbre de sortie plein ou creux</li>
                        <li>à engrenage cylindriques, couple conique, arbres parallèles, roue et vis sans fin, cycloidal, planétaire</li>
                    </ul>
                    
                </div>
            </div>
            <div class="slide">
                <div class="content-slider">
                    <h1>Moteur</h1>
                    <p>
                        Une large gamme de moteurs électriques pour l'industrie avec un indice de protection allant de IP23 à IP55. Nombreuses variantes possibles : 
                    </p>
                    <ul>
                        <li>Carcasse aluminium, fonte ou acier</li>
                        <li>230/400Vac, 400/690Vac, 500Vac</li>
                        <li>50Hz, 60Hz, 100Hz</li>
                        <li>B3, B14, B5, B34, B35, V1</li>
                        <li>Avec ou sans frein</li>
                    </ul>                        
                </div>
            </div>
            <div class="slide">
                <div class="content-slider">
                    <h1>Pompes</h1>
                    <p>
                        Une large gamme de pompes pour l'industrie. Nombreuses variantes possibles :
                    </p>
                    <ul>
                        <li>Carcasse fonte, inox, plastique</li>
                        <li>Courbe de pression / débit au point demandé</li>
                        <li>de surface, immergée</li>
                        <li>Roue en fonte, bronze ou inox</li>
                        <li>avec ou sans bague d'usure</li>
                    </ul>
                </div>

            </div>

            <div class="slide">
                <div class="content-slider">
                    <h1>Cartes électroniques</h1>
                    <p>
                        Réparation de cartes analogiques ou numériques
                        Fabrication de cartes obsolètes
                        Conception et fabrication de cartes selon cahier des charge
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="gsm">
    <h1>Depuis <span class="age">21 ans</span></h1>
    <p>GS Maintenance est une équipe de spécialistes de l'entraînement à vitesse variable. Disposant de nombreuses compétences sur les mouvements électriques, nous avons une palette de solutions à vous proposer, que ce soit pour des installations neuves, pour un rétrofit ou pour un dépannage en urgence. Nous sommes spécialisés dans la réparation et la fourniture de matériel Jeumont-Schneider.</p>
</div>


<section class="sec">
    <h2>Nos métiers</h2>
    <div class="metiers">
        <figure>
            <img src="../images/546239.png" alt="Image illustrant un électricien travaillant dans l'industrie">
            <figcaption>Electricien pour l'industrie</figcaption>
        </figure>
        <figure>
            <img src="../images/reparation.png" alt="Image illustrant un électricien travaillant dans l'industrie">
            <figcaption>Distributeur et réparateur de matériel électrique</figcaption>
        </figure>
        <figure>
            <img src="../images/vendeur.png" alt="Image illustrant un électricien travaillant dans l'industrie">
            <figcaption>Vendeur de produits propres</figcaption>
            
        </figure>
    </div>
</section>

<section class="cta">
    <h2>Pour toutes demande devis ou information</h2>
    <div class="cta-buttons">
        <a href="tel:+330164799404">+330164799404</a>
        <a href="mailto:gsm77@gsmaintenance.fr">gsm77@gsmaintenance.fr</a>
    </div>
</section>

<section class="sdem">
    <h2>Nos service de dépanage électrique et expertise mondiale</h2>
    <div class="card-container">
        <?php foreach ($cards as $card) { ?>
            <div class="card">
                <div class="card-header">
                    <img src="<?php echo $card['logo']; ?>" alt="<?php echo $card['title-card']; ?>">
                    <h3><?php echo $card['title-card']; ?></h3>
                </div>
                <p><?php echo $card['content-card']; ?></p>
            </div>
        <?php } ?>
    </div>
</section>

<section class="realisations">
    
</section>

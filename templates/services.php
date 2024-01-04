<div class="wrapper">
    <header class="s-header">
        <h1>Nos services</h1>
    </header>

    <section class="s-presentation">
        <p>
            Nous sommes fière de proposer une gamme de service en électricité industrielle. Notre expertise s'étend du dépannage sur site à la programmation d'automates complexes, de la régularisation de courant à la maintenance des moteurs électrices.
        </p>

        <p>
            Forts d'une équipe d'ingénieurs et de techniciens expérimentés, nous intervenons à travers le monde pour garantir le bon fonctionnement de vos installations industrielles.
        </p>

        <p>
            Que vous travailliez dans le forage pétrolier, l'électrolyse, les raffineries, la métalurgie, etc... nous avons les solutions adaptées à vos besoins.
        </p>

        <p>
            De la motorisation à la variation de vitessse, de la programmation à la régularisation, notre engagement est de maintenir vos opérations en marche, d'optimiser vos processus et de réduire les temps d'arrêt.
        </p>

        <p>
            Découvrez nos services et n'hésitez pas à <a href="Contact">nous contactez</a>
  pour discuter de vos besoins spécifiques.
        </p>
    </section>
    <section class="cta">
        <h2>Pour toutes demande devis ou information</h2>
        <div class="cta-buttons">
            <a href="tel:+330164799404">+330164799404</a>
            <a href="mailto:gsm77@gsmaintenance.fr">gsm77@gsmaintenance.fr</a>
        </div>
    </section>

    <section class="services">
        <h2>Nous proposons une gamme de services variées et sur mesure</h2>
        <div class="s-cards-container">
            <?php foreach($cardsData as $cardData): ?>
                <div class="card">
                    <div class="image-card">
                    </div>
                    <div class="content-card">
                        <h3 class="content-card-elment"><?php echo $cardData["name"]; ?></h3>
                        <p class="content-card-elment"><?php echo $cardData["content"]; ?></p>
                        <div class="see-more content-card-elment">
                            <a href="<?php echo $cardData["link"]; ?>">En savoir +</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>


<?php //echo urlencode("public|service") ?>
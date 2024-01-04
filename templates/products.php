<div class="wrapper-products">
    <div class="p-header">
        <h1>Nos produits</h1>
    </div>

    <section class="p-presentation">
        <p>
            Nos produits industriels sont conçus pour repondre aux besoins les plus exigeants de l'industriel. Chez GS Maintenance, nous nous engageons à fournir des solutions de pointe pour optimiser vos opérations. Que vous ayez besoin de moteurs électriques haute performance, de variateurs ou d'automates programmables etc...
        </p>

        <p>
            Nous avons la game de produits qui peut propulser votre entreprise vers de nouveaux sommets.
        </p>

        <p>
            Nos produits sont réputés pour leur fiabilité, leur efficacité énergétique et leur adaptabilité à une variété d'applications industrielles.    
        </p>

        <p>
            Que vous travailliez dans le secteurs de la papeterie, des pompes etc..., nous avons la solution électrique dont vous avez besoin .
        </p>

        <p>
            Découvrez notre gamme de produits de haute qualité, des automates au régulateur AVR, en passant par les transfo self variateurs, etet n'hésitez pas à nous contactez pour discuter de vos besoins spécifiques.
        </p>
    </section>

    <section class="cta">
        <h2>Pour toutes demande devis ou information</h2>
        <div class="cta-buttons">
            <a href="tel:+330164799404">+330164799404</a>
            <a href="mailto:gsm77@gsmaintenance.fr">gsm77@gsmaintenance.fr</a>
        </div>
    </section>

    <section class="products">
        <h2>Nos Produits pour l'Industrie</h2>
        <div class="p-cards-container">
            <?php foreach($products as $product): ?>
                <a href='<?php echo $product["link"]; ?>'>
                    <div class="wrapper-card">
                        <div class="card">
                            <div class="content-card">
                                <h3><?php echo $product["name"]; ?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</div>
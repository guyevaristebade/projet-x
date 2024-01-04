<div class="wrapper-applications">
    <div class="app-header">
        <h1>Nos Applications</h1>
    </div>

    <section class="app-presentation">
        <p> Forts de notre expertise, nous sommes fiers de proposer des solutions électriques de pointe pour les besoins industriels les plus exigeants.</p>

        <p>Que vous cherchiez à optimiser vos installations existantes, à résoudre des problèmes de dépannage complexes, ou à acquérir des produits de qualité, notre équipe qualifiée est prête à répondre à vos attentes.</p>

        <p>Nous mettons l'accent sur la fiabilité, l'efficacité énergétique et la sécurité, assurant ainsi un partenariat solide pour le succès de votre entreprise.</p>

        <p>Explorez notre gamme complète de services et de produits, conçus pour stimuler l'efficacité opérationnelle et soutenir la croissance de votre activité.</p>
    </section>

    <section class="cta">
        <h2>Pour toutes demande devis ou information</h2>
        <div class="cta-buttons">
            <a href="tel:+330164799404">+330164799404</a>
            <a href="mailto:gsm77@gsmaintenance.fr">gsm77@gsmaintenance.fr</a>
        </div>
    </section>


    <section class="applications">
        <h2>Nos applications pour l'industrie</h2>
        <div class="app-cards-container">
            <?php foreach($datas as $data): ?>
                <a href='<?php echo $data["link"]; ?>'>
                    <div class="wrapper-card">
                        <div class="card">
                            <div class="content-card">
                                <h3><?php echo $data["name"]; ?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</div>

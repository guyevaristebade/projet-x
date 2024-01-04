<div class="wrapper-contact">
    <div class="c-header">
        <h1>Contactez nous</h1>
    </div>

    <section class="c-disponibilite">
        <h2>Pour assurer le parfait fonctionnement de vos machines et obtenir des devis</h2>
        <p>Nous sommes disponibles 24h/24 et 7j/7 </p>
    </section>

    <section class="contact-container">
        <div class="form-container">
            <p class="title">Envoyez votre message</p>
            <form action="#">
                <div class="row-6">
                    <input type="text" name="nom" class="form-input" placeholder="Nom*"/>
                    <input type="text" name="prenom" class="form-input" placeholder="Prenom*"/>
                </div>
                <!-- <div class="row-6">
                </div> -->
                <div class="row-12">
                    <input type="text" name="sujet" class="form-input" placeholder="Sujet*"/>
                </div>
                <div class="row-12">
                    <textarea type="text" name="message" class="form-input" placeholder="Sujet*" rows="5" cols="33"></textarea>
                </div>
                <div class="btn-container">
                    <input type="submit" name="envoyer" class="form-input" value="Envoyez"/>
                </div>
            </form>
        </div>
        <div class="infos">
            <p class="title">Informations de contact</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error vel laborum et tempore quam rerum ex, quod doloribus culpa magnam</p>
            <div class="location">
                <div class="loc-item">
                    <span>
                        <i class="ri-map-pin-fill"></i>
                    </span>
                    <address>
                        184 Rue Pascal,77000 Vaux-Le-Penil
                    </address>
                </div>
                <div class="loc-item">
                    <span>
                        <i class="ri-map-pin-fill"></i>
                    </span>
                    <address>
                        16 Rue Henri Schneider,77430 Champagne Sur Seine
                    </address>
                </div>
            </div>

            <div class="tel">
                <div class="tel-item">
                    <span>
                        <i class="ri-phone-fill"></i>
                    </span>
                    <p>
                        +33 (0)1 64 79 94 04 - +33 (0)1 64 19 94 79
                    </p>
                </div>
                <div class="tel-item">
                    <span>
                        <i class="ri-phone-fill"></i>
                    </span>
                   <p><s>+33 (0)1 64 79 94 04 - +33 (0) 164 69 21 56</s></p>
                </div>
                <div class="mail">
                    <span>
                        <i class="ri-mail-fill"></i>
                    </span>
                    <p>gsm77@gsmaintenance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div id="map"></div>
    </section>

    <section class="faq-section">
        <h2>Foire aux questions</h2>
           <?php foreach ($faqs as $faq) : ?>
                <div class="accordeon">
                    <div class="accordeon_content">
                        <header class="accordeon_header">
                            <span class="span title"><?= $faq['question']; ?></span>
                            <span class="accordeon_icon">
                                <i class="ri-add-line plus"></i>
                                <i class="ri-subtract-line minus"></i>
                            </span>
                        </header>
                        <p class="response"><?= $faq['answer']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
    </section>
</div>
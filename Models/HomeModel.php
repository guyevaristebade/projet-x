<?php

class HomeModel{

    public function getCardsArray(){
        
        $cards = array(
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/depannage.png',
                'title-card' => 'Le dépannage sur site',
                'content-card' => "GS Maintenance excelle dans la maintenance curative, réactivant rapidement les installations défectueuses. Nos experts interviennent mondialement, offrant des solutions alternatives pour relancer votre production. Maintenance électrique sur site et en atelier, dépannage électrique sur site.",
            ),
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/International.jpg',
                'title-card' => 'Notre expertise à travers le monde',
                'content-card' => "GS Maintenance propose des services mondiaux de conseil et expertise en entraînements (fixe et variable), générateurs (diesel, hydraulique, éolien), intervenant dans les secteurs du forage pétrolier, électrolyse, raffineries, mines, cimenteries. Solutions post-expertise disponibles. Témoignages disponibles.",
            ),
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/Motorisation.jpg',
                'title-card' => 'La motorisation',
                'content-card' => "GS Maintenance assure la fourniture, l'installation, la mise en service, la réparation et le retrofit de moteurs électriques de tous types pour diverses applications. Des moteurs haute qualité (IE1 à IE4) sont disponibles, avec une expertise pour dimensionner le matériel selon vos besoins."
            ),
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/Automatisme.png',
                'title-card' => 'L\'automatisme complexe',
                'content-card' => "GS Maintenance effectue la programmation sur tous types d'automates.
        Programmation automate en grafcet, ladder, réseaux de pétri, temps réel, synchrone, asynchrone, interruptions.
        N'hésitez pas à consulter des exemples de nos réalisations dans la partie <a href='#'>Applications</a> de notre site web."
            ),
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/Variation.png',
                'title-card' => 'La variation de vitesse',
                'content-card' => "GS Maintenance offre la fourniture, l'installation, la mise en service, la réparation, et le retrofit de variateurs (fréquence, courant continu, servo). Spécialistes en vitesse variable, régulation de couple, positionnement, nous réalisons des retrofits sur diverses marques telles qu'Ansaldo, Berges, Control Techniques, et plus encore"
            ),
            array(
                'logo' => 'http://www.gsmaintenance.fr/Images/Accueil/Regulation.jpg',
                'title-card' => 'La régulation',
                'content-card' => "GS Maintenance excelle en régulation avec des compétences telles que le courant jusqu'à 25 000 Ampères, la tension de 1.8V à 1200VDC, la vitesse à 1°/oo, la traction, l'épaisseur, la puissance active et réactive."

            )
        );

        return $cards;
    }
}

?>
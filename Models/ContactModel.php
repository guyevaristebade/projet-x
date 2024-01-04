<?php

    class ContactModel{

        public function getData(){
            $faqs = array(
                array(
                    'question' => "Quelles sont les principales responsabilités d'un électricien de l'industrie?",
                    'answer' => "Un électricien industriel est chargé de l'installation, de la maintenance et de la réparation des systèmes électriques industriels, assurant ainsi un fonctionnement sûr et."
                ),
                array(
                    'question' => "Quels types de projets les ingénieurs électriques industriels peuvent-ils superviser?",
                    'answer' => "Les ingénieurs électriques industriels peuvent superviser une variété de projets, notamment la conception de systèmes électriques, l'installation d'équipements industriels, la gestion de la maintenance préventive et corrective, etc."
                ),
                array(
                    'question' => "Comment devenir électricien industriel?",
                    'answer' => "Pour devenir électricien industriel, vous devez généralement suivre une formation en électricité industrielle, obtenir les certifications nécessaires et acquérir de l'expérience pratique sur le terrain."
                ),
                array(
                    'question' => "Quelles compétences sont nécessaires pour travailler en tant qu'électricien industriel?",
                    'answer' => "Les compétences nécessaires pour travailler en tant qu'électricien industriel incluent une connaissance approfondie des systèmes électriques, la capacité à lire des schémas électriques, des compétences en dépannage, une compréhension des normes de sécurité, etc."
                ),
                array(
                    'question' => "Quels sont les principaux défis auxquels les électriciens industriels peuvent être confrontés?",
                    'answer' => "Les électriciens industriels peuvent être confrontés à des défis tels que le dépannage de pannes électriques complexes, la gestion de projets de grande envergure, la maintenance préventive pour éviter les temps d'arrêt coûteux, etc."
                ),
            );

            return $faqs;
        }
    }

?>
<?php

    class ServicesModel{
        
        function getData() {
            $cardData = array(
                array(
                    'name' => 'Carte électroniques',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus, consequuntur qui similique ratione beatae iusto accusamus enim quo nihil! Vitae sequi fuga voluptatem voluptatibus voluptatum ipsa atque numquam provident?",
                    'link' => "Services/cartes-electroniques",
                    'urlImage' => "https://img.freepik.com/vecteurs-libre/illustration-icone-galerie_53876-27002.jpg?size=626&ext=jpg&ga=GA1.1.106783804.1701858349&semt=ais"
                ),
                array(
                    'name' => 'Formation - Training',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus, consequuntur qui similique ratione beatae iusto accusamus enim quo nihil! Vitae sequi fuga voluptatem voluptatibus voluptatum ipsa atque numquam provident?",
                    'link' => "Services/formations-training",
                    'urlImage' => "https://img.freepik.com/vecteurs-libre/illustration-icone-galerie_53876-27002.jpg?size=626&ext=jpg&ga=GA1.1.106783804.1701858349&semt=ais"
                ),
                array(
                    'name' => 'Jeumont Schneider',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus, consequuntur qui similique ratione beatae iusto accusamus enim quo nihil! Vitae sequi fuga voluptatem voluptatibus voluptatum ipsa atque numquam provident?",
                    'link' => "Services/jeumont-schneider",
                    'urlImage' => "https://img.freepik.com/vecteurs-libre/illustration-icone-galerie_53876-27002.jpg?size=626&ext=jpg&ga=GA1.1.106783804.1701858349&semt=ais"
                ),
                array(
                    'name' => 'Maintenance',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus, consequuntur qui similique ratione beatae iusto accusamus enim quo nihil! Vitae sequi fuga voluptatem voluptatibus voluptatum ipsa atque numquam provident?",
                    'link' => "Services/maintenance",
                    'urlImage' => "https://img.freepik.com/photos-gratuite/homme-technicien-electricien-travaillant-dans-standard-fusibles-utilise-tablette_169016-24811.jpg?w=826&t=st=1701858690~exp=1701859290~hmac=a71d8546fa493547ba2b05d5722be9bf8ecef48a75b35d499d57f1f97e83813f"
                ),
                array(
                    'name' => 'Rebobinage',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus, consequuntur qui similique ratione beatae iusto accusamus enim quo nihil! Vitae sequi fuga voluptatem voluptatibus voluptatum ipsa atque numquam provident?",
                    'link' => "Services/rebobinage",
                    'urlImage' => "https://img.freepik.com/vecteurs-libre/illustration-icone-galerie_53876-27002.jpg?size=626&ext=jpg&ga=GA1.1.106783804.1701858349&semt=ais"
                ),
            );
            
            return $cardData;
        }
    }

?>
<?php

class MainController{

    public function display($page){
        switch ($page) {
            case 'Accueil':
                $homeModel = new HomeModel();
                $arrayData = $homeModel->getCardsArray();

                $homeView = new HomeView();
                $homeView->render($arrayData);

                break;

            case 'Applications':
                $applicationModel = new ApplicationsModel();
                $dataApp = $applicationModel->getData();

                $applicationView = new ApplicationsView();
                $applicationView->render($dataApp);

                break;

            case 'Services':
                $servicesModel = new ServicesModel();
                $cardsData = $servicesModel->getData();
                
                $servicesView = new ServicesView();
                $servicesView->render($cardsData);
                
                break;

            case 'Produits':
                $productsModel = new ProductsModel();
                $data = $productsModel->getData();

                $productsView = new ProductsView();
                $productsView->render($data);

                break;

            case 'Historique':
                $historicalModel = new HistoricalModel();
                $data = $historicalModel->getData();

                $historicalView = new HistoricalView();
                $historicalView->render($data);
                
                break;

            case 'Contact':

                $contactModel = new ContactModel();
                $faqs = $contactModel->getData();

                $contactView = new ContactView();
                $contactView->render($faqs);
                break;
            
            default:
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
    <?php 
        require("../Includes/requires.php");
        require("../Includes/functions.php");
        $path =  isset($_GET["page"]) ?  $_GET["page"] :  "Accueil";
        $page = getPagePath($path);
        includeHeadByPage($page);
    ?>
<body>
    <?php  
        /* NAVBAR */
        include("../Includes/navbar.php"); 

        $mainController = new MainController();

        /* MAIN */
        switch ($page) {
            case 'Accueil':
                echo $_REQUEST;
                $mainController->display($page);
                break;

            case 'Applications':
                $mainController->display($page);
                break;

            case 'Services':
                $mainController->display($page);
                break;

            case 'Produits':
                $mainController->display($page);
                break;

            case 'Historique':
                $mainController->display($page);
                break;
            
            case 'Contact':
                $mainController->display($page);
                break;
            
            default:
                include('../templates/404error.php');
                break;
        }
        include("../Includes/scrollToTop.php");

        /* FOOTER */
        include("../Includes/footer.php");
    ?>
</body>
</html>
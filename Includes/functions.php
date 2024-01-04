<?php
    /**
     * Function to include CSS style sheets in a page.
     *
     * @param array $dir_paths An array containing paths to CSS files.
     */
    function includeStyle($dir_paths = array()) {
        foreach ($dir_paths as $dir_path) {
            echo "<link rel='stylesheet' href='$dir_path' />";
        }
    }

    /**
     * Function to include JavaScript scripts in a page.
     *
     * @param array $dir_paths An array containing paths to JavaScript files.
     * @param string $defer    The value of the "defer" attribute for scripts (optional).
     */
    function includeScript($dir_paths = array(), $defer = "") {
        foreach ($dir_paths as $dir_path) {
            echo "<script src='$dir_path' $defer></script>";
        }
    }

    /**
     * Function to get the last element of a URL path.
     *
     * @param string $array The URL path.
     * @return string The last element of the path.
     */
    function getPagePath($array) {
        $tab = explode('/', $array);
        $path = $tab[count($tab) - 1];
        return $path;
    }


    function includeHeadByPage($page) {
        switch ($page) {
            case "Accueil":
                include("../Includes/heads/home_head.php");
                break;

            case "Applications":
                include("../Includes/heads/applications_head.php");
                break;

            case "Services":
                include("../Includes/heads/services_head.php");
                break;

            case "Produits":
                include("../Includes/heads/products_head.php");
                break;

            case "Historique":
                include("../Includes/heads/historical_head.php");
                break;

            case "Contact":
                include("../Includes/heads/contact_head.php");
                break;

            default:
                include("../Includes/heads/404error_head.php");
                break;
        }
    }
?>

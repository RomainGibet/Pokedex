<?php 

namespace Pokedex\Controllers;

class CoreController 
{

    public function affichage($viewPage, $viewData = []) {

        global $router;
        
        $absoluteURL = $_SERVER['BASE_URI'] ."/";
        extract($viewData);

        require __DIR__ . "/../views/header.tpl.php";
        require __DIR__ . "/../views/" . $viewPage . ".tpl.php";
        require __DIR__ . "/../views/footer.tpl.php";

    }









}
















?>
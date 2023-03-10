<?php 

require __DIR__ . "/../vendor/autoload.php";



$router = new AltoRouter;
$router -> setBasePath($_SERVER['BASE_URI']);

$router -> map('GET', '/', ['controller' => 'MainController', 'method' =>'home'], 'home-page');
$router -> map('GET', '/pokepage/[i:id]', ['controller' => 'PageController', 'method' =>'pokePage'], 'pokemon-page');
$router -> map('GET', '/liste', ['controller' => 'PageController', 'method' =>'listePage'], 'liste-page');
$router -> map('GET', '/type/[a:action]', ['controller' => 'PageController', 'method' =>'typePage'], 'type-page');



$match = $router -> match(); 

if ($match !== false) {

$routeTarget = $match['target'];
$controllerToUse = "Pokedex\\Controllers\\" . $routeTarget['controller'];
$methodToUse = $routeTarget['method'];
$urlParams = $match['params'];

$controller = new $controllerToUse();
$controller -> $methodToUse($urlParams);


} else {


    $controller = new Pokedex\Controllers\MainController();
    $controller->pageNotFound();
};

















?>

<?php

// On charge toutes les dépendances installées avec Composer
require_once __DIR__ . '/../vendor/autoload.php';
// On charge nos controleurs
// require_once __DIR__ . '/../app/Controllers/CoreController.php';
// require_once __DIR__ . '/../app/Controllers/CatalogController.php';
// require_once __DIR__ . '/../app/Controllers/MainController.php';
// require_once __DIR__ . '/../app/Models/CoreModel.php';
// require_once __DIR__ . '/../app/Models/Brand.php';
// require_once __DIR__ . '/../app/Models/Category.php';
// require_once __DIR__ . '/../app/Models/Product.php';
// require_once __DIR__ . '/../app/Models/Type.php';
// require_once __DIR__ . '/../app/Utils/Database.php';


/*
if (isset($_GET['_url'])) {
    $pagePath = $_GET['_url'];
} else {
    $pagePath = '/';
}

$routes = [
    'home' => [&azaaza
        'path' => '/',
        'controller' => 'MainController',
        'method' => 'home',
    ],
    'category' => [
        'path' => '/category',
        'controller' => 'CatalogController',
        'method' => 'category',
    ],
];

foreach($routes as $route) {
    if ($pagePath == $route['path']) {
        $controllerName = $route['controller'];
        $methodName = $route['method'];
    }
}*/

// On peut dump ce qu'on veut pour le voir dans index.php
// dump($routes);
// dd() veut dire dump and die
// dd($routes);

// On utilise désormais AltoRouter pour gérer nos routes
// On va les déclarer puis demander à AltoRouter de faire la correspondance
// entre la les routes déclarées et l'URL demandé

// On instancie AltoRouter
$router = new AltoRouter();
// Par défaut, AltoRouter prend la route entière derrière localhost
// On lui demande d'ignoré la partie «/Qui-Gon/S05-oShop-Djyp/public»
// lorsqu'il analysera les url pour trouver un match
$router->setBasePath($_SERVER['BASE_URI']);

// On déclare nos routes
$router->map('GET', '/', [
    'controller' => 'MainController',
    'method' => 'home',
], 'home');

$router->map('GET', '/legal-mentions', [
    'controller' => 'MainController',
    'method' => 'legalMentions',
], 'legal_mentions');

$router->map('GET', '/404', [
    'controller' => 'MainController',
    'method' => '404',
], '404_page');

$router->map('GET', '/catalog/category/[i:categoryId]', [
    'controller' => 'CatalogController',
    'method' => 'category',
], 'catalog_category');

$router->map('GET', '/catalog/type/[i:typeId]', [
    'controller' => 'CatalogController',
    'method' => 'type',
], 'catalog_type');

$router->map('GET', '/catalog/brand/[i:brandId]', [
    'controller' => 'CatalogController',
    'method' => 'singleBrand',
], 'catalog_brand');

$router->map('GET', '/catalog/product/[i:productId]', [
    'controller' => 'CatalogController',
    'method' => 'product',
], 'catalog_product');
// map user details page

// Test d'une route et réécriture en dure avec altorouter 
// puis passage d'une valeur via son ID :
// $route = $router->generate('catalog_product', ['brandId' => $brand->getId()]);


// On demande à AltoRouter de faire correspondre l'url demandé avec nos routes
$match = $router->match();

// $match est tableau si une correspondance a été trouvée
// $match vaut false si rien n'a été trouvé
if (is_array($match)) {
    // On récupère le nom du controleur à instancier dans $match
    // La clé 'target' de $match nous donne justement les informations sur le nom du controleur et le nom de la méthode pour notre route
    // "target" => [
    //     "controller" => "CatalogController"
    //     "method" => "category"
    // ]
    $controllerName = '\Oshop\Controllers\\' . $match['target']['controller'];
    $methodName = $match['target']['method'];

    // On a donc le nom du controler et le nom de la méthode*
    // On instancie le controleur 
    $controller = new $controllerName();
    $controller->$methodName($match['params']);
} else {
    // Si on est dans le else, c'est que la route tapée dans la barre d'url, n'existe pas dans $router
    // $match vaut donc false, et il faudrait afficher une 404
    // On déclare donc une méthode error404 dans MainController, qu'on exécute ici

    $controller = new \Oshop\Controllers\MainController();
    $controller->error404();

    // Petit bonus, on pourrait écrire ces deux lignes comme ceci
    // (new MainController)->error404();
}


<?php


namespace Oshop\Controllers;

use Oshop\Models\Brand;
use Oshop\Models\Type;

class CoreController
{

    protected function show($viewName, $viewData = [])
    {
        // urlPrefix : http://localhost/Qui-Gon/S05-oShop-Djyp/public/
        $viewData['urlPrefix'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['BASE_URI'] . '/';
        // Nous avons besoin de la liste des marques mises en avant en pied de page 
        // sur toutes les pages !
        // On va donc utiliser la méthode findForFooter de Brand ici dans show()
        // pour ajouter les résultats dans $viewData
        // On crée un objet Brand pour appeler sa méthode
        $brand = new Brand();
        // On récupère la liste des marques mises en avant dans $viewData
        // On pourra se servir de $viewData['footer_brands'] dans nos templates
        $viewData['footerBrands'] = $brand->findForFooter();

        $type = new Type();
        $viewData['footerType'] = $type->findForFooter();

        if ($viewName == '404'){
            require __DIR__ . '/../views/' . $viewName . '.tpl.php';

        }else {
        // __DIR__ vaut /var/www/html/S05/..../Controllers
        require __DIR__ . '/../views/header.tpl.php';
        // on inclut une vue selon la valeur du paramètre $viewName
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
        }
    }
}
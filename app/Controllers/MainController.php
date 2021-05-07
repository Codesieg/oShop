<?php

namespace Oshop\Controllers;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('home');
    }

    public function legalMentions()
    {
        $this->show('legalMentions');
    }

    public function error404()
    {
        // On précise au client que la page n'est pas trouvée avec un code de statut de réponse 404
        http_response_code(404);
        $this->show('404');
    }
}
<?php

namespace Oshop\Models;

use Oshop\Utils\Database;

class Brand extends CoreModel
{
    private $footer_order;
    /**
     * findAll() retourne toutes les marques sous forme d'un tableau d'objets Brand
     * C'est possible facilement grace à PDO::FETCH_CLASS
     *
     * @return array|Brand
     */
    public function findAll()
    {
        $sql = 'SELECT * FROM brand';

        // On utilise la classe Database pour récupérer l'objet PDO déjà connecté à la BDD
        $pdo = Database::getPDO();
        // On exécute la requete SQL et on obtient un objet de la classe PDOStatement
        $pdoStatement = $pdo->query($sql);
        // PDO::FETCH_CLASS précise la méthode avec laquelle on récupère les données
        // Le deuxième argument est nécessaire pour indiquer à quelle classe associer les résultats
        // Un lien automatique sera fait entre le snoms des champs dans lestables et les noms des propriétés
        // Ça nous permet d'obtenir un tableau d'objet de la classe Brand
        // pour lesquels les propriétés sont préremplies avec les données dans les colonnes du même nom
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Brand');

        return $results;
    }

    public function find($id)
    {
        $sql = '
            SELECT *
            FROM brand
            WHERE id = ' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        // Un peu comme PDO::FETCH_CLASS, on peut utiliser fetchObject() quand on a un seul résultat ou qu'on traite tous les résultats un à un
        $result = $pdoStatement->fetchObject('Oshop\Models\Brand');

        return $result;
    }

    public function findForFooter()
    {
        $sql = '
            SELECT *  
            FROM `brand` 
            WHERE `footer_order` > 0
            ORDER BY `footer_order`
            LIMIT 5
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Brand');
    }

    /**
     * Get the value of footerOrder
     */
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footerOrder
     *
     * @return  self
     */
    public function setFooterOrder($footerOrder)
    {
        $this->footer_order = $footerOrder;

        return $this;
    }

}

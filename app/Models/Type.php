<?php

namespace Oshop\Models;

use Oshop\Utils\Database;

class Type extends CoreModel
{

    private $footer_order;

    function findAll()
    {

        $sql = 'SELECT * 
        FROM type';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $resultats = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Type');
        return $resultats;
    }

    function find($id)
    {
        $sql = 'SELECT * 
        FROM type 
        WHERE id = ' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $resultats = $pdoStatement->fetchObject('Oshop\Models\Type');
        return $resultats;
    }

    public function findForFooter()
    {
        $sql = '
            SELECT *  
            FROM `type` 
            WHERE `footer_order` > 0
            ORDER BY `footer_order`
            LIMIT 5
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Type');
    }

    /**
     * Get the value of footer_order
     */
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     *
     * @return  self
     */
    public function setFooterOrder($footer_order)
    {
        $this->footer_order = $footer_order;
        return $this;
    }

}

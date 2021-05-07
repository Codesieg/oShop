<?php

namespace Oshop\Models;

use Oshop\Utils\Database;

class Category extends CoreModel
{
    private $subtitle;
    private $picture;
    private $home_order;


    function findAll()
    {

        $sql = 'SELECT *
        FROM category ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $resultat = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Category');
        return $resultat;
    }

    function find($id)
    {
        $sql = 'SELECT *
        FROM category
        WHERE id = ' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $resultat = $pdoStatement->fetchObject('Oshop\Models\Category');
        return $resultat;
    }

    /**
     * Get the value of subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of home_order
     */
    public function getHomeOrder()
    {
        return $this->home_order;
    }

    /**
     * Set the value of home_order
     *
     * @return  self
     */
    public function setHomeOrder($home_order)
    {
        $this->home_order = $home_order;

        return $this;
    }
}

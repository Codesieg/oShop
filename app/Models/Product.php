<?php

namespace Oshop\Models;

use Oshop\Utils\Database;

class Product extends CoreModel
{

    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $brand_id;
    private $category_id;
    private $type_id;

    public function findAll()
    {
        $sql = 'SELECT * FROM product';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Oshop\Models\Product');
        return $results;
    }

    public function find($id)
    {
        // dump($id);
        $sql = '
            SELECT *
            FROM product
            WHERE id = ' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchObject('Oshop\Models\Product');
        return $result;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get the value of rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * Get the value of brand_id
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     */
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    /**
     * Get the value of category_id
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * Get the value of type_id
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;
    }
}

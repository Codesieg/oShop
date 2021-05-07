<?php

namespace Oshop\Controllers;

use Oshop\Models\Product;
use Oshop\Models\Brand;
use Oshop\Models\Type;

class CatalogController extends CoreController
{
    public function category()
    {
        $product = new Product();
        $list = $product->findAll();
        $this->show('products_list', ['list' => $list]);
    }

    public function type()
    {
        $type = new Type();
        $list = $type->findAll();
        $this->show('products_list', ['list' => $list]);
    }

    public function brand()
    {
        $brand = new Brand();
        $list = $brand->findAll();
        $this->show('products_list', ['list' => $list]);
    }

    public function product($id)
    {
        $product = new Product();
        $list = $product->find($id["productId"]);
        $this->show('product', ['list' => $list]);
    }

    public function singleBrand($id)
    {
        $brand = new brand();
        $list = $brand->find($id["brandId"]);
        dd($list);
        $this->show('product', ['list' => $list]);
    }
}

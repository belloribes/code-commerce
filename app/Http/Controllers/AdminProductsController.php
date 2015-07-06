<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;


class AdminProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        echo '<h1>Listagem de produtos</h1>';

        echo '<br/><ul>';

        foreach($products as $row)
        {
            echo '<li>' . $row->name . '</li>';
        }

        echo '</ul>';
    }
}

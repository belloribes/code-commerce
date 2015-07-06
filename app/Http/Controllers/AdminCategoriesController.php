<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        echo '<h1>Listagem de categorias</h1>';

        echo '<br/><ul>';

        foreach($categories as $row)
        {
            echo '<li>' . $row->name . '</li>';
        }

        echo '</ul>';
    }
}

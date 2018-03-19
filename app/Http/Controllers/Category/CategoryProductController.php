<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\ApiController;

class CategoryProductController extends ApiController
{
    public function index(Category $category)
    {
        $products = $category->products;
        return $this->showAll($products);
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index(Product $product)
    {



        return view('__shop.products.index', compact('product'));
    }

}

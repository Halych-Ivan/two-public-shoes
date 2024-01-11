<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Config;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::inRandomOrder()->limit(2)->get();
        $products = Product::inRandomOrder()->limit(4)->get();




        $data = '';

        return view('__shop.index', compact('products', 'categories'));

//        $config = Config::find(1);
//        return view('__shop.layout', compact('config'));
    }

}

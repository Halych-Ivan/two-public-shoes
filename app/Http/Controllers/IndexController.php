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

        $products = Product::inRandomOrder()->limit(6)->get();




        $data = '';

        return view('__shop.index', compact('products'));

//        $config = Config::find(1);
//        return view('__shop.layout', compact('config'));
    }

}

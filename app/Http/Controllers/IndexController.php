<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Config;
use App\Models\MainBanner;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $mainBanners = MainBanner::where('active', 1)->take(3)->get();

        $categories = Category::inRandomOrder()->limit(2)->get();
        $products = Product::inRandomOrder()->limit(4)->get();

        $productsAll = Product::all();




        $data = '';

        return view('__shop.index', compact('products', 'categories', 'mainBanners', 'productsAll'));

//        $config = Config::find(1);
//        return view('__shop.layout', compact('config'));
    }


    public function contact()
    {
        $config = Config::find(1);
        $productsAll = Product::select('id', 'title', 'image')->inRandomOrder()->get();

        return view('__shop.contact', compact('config', 'productsAll'));
    }

}

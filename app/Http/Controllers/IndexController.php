<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Category;
use App\Models\Config;
use App\Models\MainBanner;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $mainBanners = MainBanner::where('active', 1)->take(3)->get();

        $categories = Category::inRandomOrder()->limit(2)->get();
        $products = Product::inRandomOrder()->limit(4)->get();

        $productsAll = Product::select('id', 'title', 'image')->inRandomOrder()->get();


        return view('__shop.index', compact('products', 'categories', 'mainBanners', 'productsAll'))->with(['data' => $this->data]);
    }


    public function about()
    {
        $config = Config::find(1);
        $productsAll = Product::select('id', 'title', 'image')->inRandomOrder()->get();

        return view('__shop.about', compact('config', 'productsAll'))->with(['data' => $this->data]);
    }


    public function contact()
    {
        $config = Config::find(1);
        $productsAll = Product::select('id', 'title', 'image')->inRandomOrder()->get();

        return view('__shop.contact', compact('config', 'productsAll'))->with(['data' => $this->data]);
    }

    public function contact_form(ContactFormRequest $request, Message $message)
    {
        $data = $request->validated();

        $message->name = $data['name'] ?? '';
        $message->phone = $data['phone'] ?? '';
        $message->subject = $data['subject'] ?? '';
        $message->messages = $data['messages'] ?? '';
        $message->active = 1;
//        dd($message);

        $message->save();
        return redirect()->back()->with(['data' => $this->data]);
    }



}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $config = Config::find(1);

        return view('admin.main.index', compact('config'));
    }

    public function create(Config $config)
    {
        return view('admin.main.index', compact('config'));
    }

    public function store(BannersRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $this->save($data, $banner, 'uploads/banners');
        return redirect()->route('admin.banners.index');
    }





    public function img()
    {

        return view('admin.main.index');
    }

    public function form(Request $request)
    {
        $config = Config::find(1);

        $request->validate([
            'phone' => '', 'phone_1' => '', 'phone_2' => '',
            'email' => '', 'email_1' => '', 'email_2' => '',
            'address' => '',
            'slider' => '',
            'featured' => '',
            'hot_deals' => '',
            'brands' => '',
            'logo' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);
//        dd($request);

        if(isset($request->phone)){$config->phone = $request->phone;}
        if(isset($request->phone_1)){$config->phone_1 = $request->phone_1;}
        if(isset($request->phone_2)){$config->phone_2 = $request->phone_2;}

        if(isset($request->email)){$config->email = $request->email;}
        if(isset($request->email_1)){$config->email_1 = $request->email_1;}
        if(isset($request->email_2)){$config->email_2 = $request->email_2;}

        if(isset($request->address)){$config->address = $request->address;}

        if(isset($request->slider)){$config->slider = true;}else{$config->slider = false;}
        if(isset($request->featured)){$config->featured = true;}else{$config->featured = false;}
        if(isset($request->hot_deals)){$config->hot_deals = true;}else{$config->hot_deals = false;}
        if(isset($request->brands)){$config->brands = true;}else{$config->brands = false;}





        if(isset($request->logo)){
            $request->logo->move(public_path('images'), 'logo.png');
        }


        $config->save();
        return redirect()->route('admin');
    }
}

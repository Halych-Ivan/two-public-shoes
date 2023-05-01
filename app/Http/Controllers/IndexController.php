<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $config = Config::find(1);
        return view('__shop.layout', compact('config'));
    }

}

<?php

namespace App\Http\Controllers;


use App\Models\Category;


class CategoriesController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);


        return view('__shop.categories.index', compact('category'));
    }

}

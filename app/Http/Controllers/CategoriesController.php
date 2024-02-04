<?php

namespace App\Http\Controllers;


use App\Models\Category;


class CategoriesController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $category = Category::find($id);

//        dd($category);

        return view('__shop.categories.index', compact('category', 'categories'))->with(['data' => $this->data]);
    }

}

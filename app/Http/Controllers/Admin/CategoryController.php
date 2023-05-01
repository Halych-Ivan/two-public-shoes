<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('__admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('__admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => '',
            'section' => '',
            'visibility' => '',
            'banner_heading' => 'image|mimes:png,jpg,jpeg|max:2048',
            'banner_shop' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);
//        dd($request);

        $category = new Category();
        $category->title = $request->title;
        $category->section = $request->section;
        $category->visibility = $request->visibility;
        $category->save();

        if(isset($request->banner_heading)){
            $file = $request->banner_heading;
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/categories'), $filename);
            $category->banner_heading = $filename;
            $category->save();
        }

        if(isset($request->banner_shop)){
            $file = $request->banner_shop;
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/categories'), $filename);
            $category->banner_shop = $filename;
            $category->save();
        }







        //dd($category);


        return view('__admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('__admin.category.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

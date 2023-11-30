<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::query()
            ->orderBy('section')
            ->orderBy('visibility', 'desc')
            ->orderBy('title')
            ->get();
        return view('admin.categories.index', compact('categories'));
    }


    public function create(Category $category)
    {
        $banners = Banner::all();
        return view('admin.categories.add_edit', compact('category', 'banners'));
    }


    public function store(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $this->save($data, $category);
        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {

        return view('admin.categories.create', compact('category'));
    }


    public function edit(Category $category)
    {
        $banners = Banner::all();
        return view('admin.categories.add_edit', compact('category', 'banners'));
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $this->save($data, $category);
        return redirect()->route('admin.categories.index');
    }


    public function destroy(Category $category)
    {
        $this->deleteImg($category->banner_heading, 'categories');
        $this->deleteImg($category->banner_shop, 'categories');
        $category->delete();
        return redirect()->route('admin.categories.index')->with('alert', 'Дія виконана успішно!');
    }


    private function add($data, $model)
    {
        if(isset($data['title'])) { $model->title = $data['title']; };
        if(isset($data['section'])) { $model->section = $data['section']; };
        if(isset($data['visibility'])) { $model->visibility = $data['visibility']; };
        if(isset($data['banner_heading'])){
            $model->banner_heading = $this->saveImg($data['banner_heading'], 'categories', $model->banner_heading);
        }
        if(isset($data['banner_shop'])){
            $model->banner_shop = $this->saveImg($data['banner_shop'], 'categories', $model->banner_shop);
        }
        $model->save();
    }
}

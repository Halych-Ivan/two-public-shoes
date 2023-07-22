<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
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
        return view('admin.categories.create', compact('category'));
    }


    public function store(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->title = $data['title'];
        $category->section = $data['section'] ?? '0';
        $category->visibility = $data['visibility'] ?? '0';

        if(isset($data['banner_heading'])){ $category->banner_heading = $this->saveImg($data['banner_heading'], 'categories'); }
        if(isset($data['banner_shop'])){ $category->banner_shop = $this->saveImg($data['banner_shop'], 'categories'); }

        $category->save();

        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.categories.create', compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.categories.create', compact('category'));
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        if(isset($data['title']))      { $category->title = $data['title']; };
        if(isset($data['section']))    { $category->section = $data['section']; };
        if(isset($data['visibility'])) { $category->visibility = $data['visibility']; };

        if(isset($data['banner_heading'])){
            $category->banner_heading = $this->saveImg($data['banner_heading'], 'categories', $category->banner_heading);
        }

        if(isset($data['banner_shop'])){
            $category->banner_shop = $this->saveImg($data['banner_shop'], 'categories', $category->banner_shop);
        }

        $category->save();

        return redirect()->route('admin.categories.index');
    }


    public function destroy(Category $category)
    {
        $this->deleteImg($category->banner_heading, 'categories');
        $this->deleteImg($category->banner_shop, 'categories');
        $category->delete();

        return redirect()->route('admin.categories.index')->with('alert', 'Дія виконана успішно!');
    }


    private function saveImg($file, $folder, $fileDelete = false)
    {
        if($fileDelete){ $this->deleteImg($fileDelete, 'categories'); }

        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/'.$folder), $filename);

        return $filename;
    }

    private function deleteImg($file, $folder)
    {
        $fileForDelete = public_path('images/' . $folder . '/' . $file);
        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }
    }
}

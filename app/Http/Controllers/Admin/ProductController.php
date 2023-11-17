<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::query()
            ->orderBy('category_id')
            ->orderBy('visibility', 'desc')
            ->orderBy('title')
            ->get();
        return view('admin.products.index', compact('products'));
    }


    public function create(Product $product)
    {
        $categories = Category::query()->get();
        return view('admin.products.create', compact('product', 'categories'));
    }


    public function store(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $this->add($data, $product);
        return redirect()->route('admin.products.index');

    }


    public function show(Product $product)
    {
        return redirect()->route('admin.products.index');
    }


    public function edit(Product $product)
    {
        $categories = Category::query()->get();
        return view('admin.products.create', compact('product', 'categories'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $this->add($data, $product);

        if(isset($data['image'])){
            $filename = time() . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('images/products/' . $product->id), $filename);

            $product->images()->create([
                'image_path' => 'images/products/' . $product->id . '/' . $filename
            ]);
            return redirect()->route('admin.products.edit', $product);
        }

        return redirect()->route('admin.products.index');
    }


    public function destroy(Product $product)
    {
//        $this->deleteImg($category->banner_heading, 'categories');
//        $this->deleteImg($category->banner_shop, 'categories');
        $product->delete();
        return redirect()->route('admin.products.index')->with('alert', 'Дія виконана успішно!');
    }


    //видалення фото продукту
    public function destroyImage(Product $product, ProductImage $image)
    {
        $fileForDelete = public_path($image->image_path);
        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }
        $image->delete();
        return redirect()->route('admin.products.edit', $product)->with('alert', 'Дія виконана успішно!');
    }




    private function add($data, $model)
    {
        if(isset($data['title'])) { $model->title = $data['title']; };
        if(isset($data['category_id'])) { $model->category_id = $data['category_id']; };
        if(isset($data['visibility'])) { $model->visibility = $data['visibility']; };
        if(isset($data['price'])) { $model->price = $data['price']; };
        if(isset($data['description'])) { $model->description = $data['description']; };

        $model->save();
    }
}

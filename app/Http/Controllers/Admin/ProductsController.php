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

class ProductsController extends Controller
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
        return view('admin.products.add_edit', compact('product', 'categories'));
    }


    public function store(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $this->save($data, $product, 'uploads/products');
        return redirect()->route('admin.products.index');

    }


    public function show(Product $product)
    {
        return redirect()->route('admin.products.index');
    }


    public function edit(Product $product)
    {
        $categories = Category::query()->get();
        return view('admin.products.add_edit', compact('product', 'categories'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
//        dd($data);

        $this->save($data, $product, 'uploads/products');

        if(isset($data['images'])){
            $filename = time() . '.' . $data['images']->getClientOriginalExtension();
            $data['images']->move(public_path('uploads/products/' . $product->id), $filename);

            $product->images()->create([ 'image_path' => 'uploads/products/' . $product->id . '/' . $filename ]);
            return redirect()->route('admin.products.edit', $product);
        }

        return redirect()->route('admin.products.edit', $product);
    }


    public function destroy(Product $product)
    {
//        $this->deleteImg($category->banner_heading, 'categories');
//        $this->deleteImg($category->banner_shop, 'categories');
        $product->delete();
        return redirect()->route('admin.products.index')->with('alert', 'Дія виконана успішно!');
    }



    //видалення фото продукту
    public function destroyImage(Product $product)
    {
        $fileForDelete = public_path($product->image);
        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }

        $product->image = null;
        $product->save();

        return redirect()->route('admin.products.edit', $product->id)->with('alert', 'Дія виконана успішно!');
    }

    public function destroyImages(Product $product, ProductImage $image)
    {
        $fileForDelete = public_path($image->image_path);

        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }
        $image->delete();
        return redirect()->route('admin.products.edit', $product)->with('alert', 'Дія виконана успішно!');
    }



}

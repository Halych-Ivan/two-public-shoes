<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannersRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannersController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }


    public function create(Banner $banner)
    {
        return view('admin.banners.add_edit', compact('banner'));
    }


    public function store(BannersRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $this->save($data, $banner, 'uploads/banners');
        return redirect()->route('admin.banners.index');
    }


    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }


    public function edit(Banner $banner)
    {
        return view('admin.banners.add_edit', compact('banner'));
    }


    public function update(BannersRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $this->save($data, $banner, 'uploads/banners');
        return redirect()->route('admin.banners.index');
    }


    public function destroy(Banner $banner)
    {
        $this->deleteFile($banner->image);
        $banner->delete();
        return redirect()->route('admin.banners.index')->with('alert', 'Дія виконана успішно!');
    }
}

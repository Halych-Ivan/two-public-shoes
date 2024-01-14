<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MainBannersRequest;
use App\Models\MainBanner;
use Illuminate\Http\Request;

class MainBannerController extends Controller
{

    public function index()
    {
        $mainBanners = MainBanner::all();
        return view('admin.main_banners.index', compact('mainBanners'));
    }


    public function create(MainBanner $mainBanner)
    {
        return view('admin.main_banners.add_edit', compact('mainBanner'));
    }


    public function store(MainBannersRequest $request, MainBanner $mainBanner)
    {
        $data = $request->validated();
        $mainBanner->active = null;

        $this->save($data, $mainBanner, 'uploads/banners');
        return redirect()->route('admin.main_banners.index');
    }


    public function show(MainBanner $mainBanner)
    {
        return $this->index();
    }


    public function edit(MainBanner $mainBanner)
    {
        return $this->create($mainBanner);
    }


    public function update(MainBannersRequest $request, MainBanner $mainBanner)
    {
        return $this->store($request, $mainBanner);
    }


    public function destroy(MainBanner $mainBanner)
    {
        $this->deleteFile($mainBanner->image);
        $mainBanner->delete();
        return redirect()->route('admin.main_banners.index')->with('alert', 'Дія виконана успішно!');

    }
}
